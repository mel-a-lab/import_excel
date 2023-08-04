<?php

namespace App\Controller;

use App\Form\DataType;
use League\Csv\Reader;
use App\Entity\Vehicule;
use App\Form\ProductType;
use App\Service\DataMappingService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImportController extends AbstractController
{
    /**
     * @Route("/", name="import")
     */
    public function index(Request $request, DataMappingService $dataMappingService)
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
                $vehiculeData = $dataMappingService->applyMapping($record);
                $vehiculeForm = $this->createForm(DataType::class, $vehicule);
                $vehiculeForm->submit($vehiculeData);
                if ($vehiculeForm->isValid()) {
             
                        $em->persist($vehicule);
                        $em->flush();      
                     
                }

            }
            $this->addFlash('success', 'Les données ont été importées avec succès !'); 
            $vehicules = $em->getRepository(Vehicule::class)->findAll();
         


        }

        return $this->render('import.html.twig', [
            'form' => $form->createView(),
            'vehicules' => $vehicules,
        ]);
    }
}