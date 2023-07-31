<?php

namespace App\Controller;

use League\Csv\Reader;
use App\Entity\Vehicule;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImportController extends AbstractController
{
    #[Route('/import', name: 'import')]
    public function index(Request $request)
    {
        $form = $this->createForm(ProductType::class);
        $form->handleRequest($request);

        $vehicules = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('upload_file')->getData();

            $csv = Reader::createFromPath($file->getPathname(), 'r');
            $csv->setDelimiter(';');
            $csv->setHeaderOffset(0);
            $header = $csv->getHeader();
            $records = $csv->getRecords();

            $em = $this->getDoctrine()->getManager();
            foreach ($records as $record) {
                $vehicule = new Vehicule();
                $vehicule->setImmatriculation($record['Immatriculation']);
                $vehicule->setNom($record['Nom']);
                $vehicule->setPrenom($record['Prénom']);
                // Set other fields...
            
                $em->persist($vehicule);
            }
            

            $em->flush();

            $this->addFlash('success', 'Les données ont été importées avec succès !');
            $vehicules = $em->getRepository(Vehicule::class)->findAll();


            
        }

        return $this->render('import.html.twig', [
            'form' => $form->createView(),
            'vehicules' => $vehicules,
        ]);
    }
}