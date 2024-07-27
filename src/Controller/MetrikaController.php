<?php

namespace YandexMetrikaBundle\Controller;

use JsonRpcBundle\JsonRpcController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MetrikaController extends JsonRpcController
{
    public function __construct(
        private readonly LoggerInterface   $logger,
    )
    {
    }

    /**
     * Точка входа для обработки данных доменов
     *
     * @param Request $request
     * @return JsonResponse
     */
    #[Route('/test', name: 'test', methods: ['POST'])]
    public function index(Request $request): JsonResponse
    {
        return parent::index($request);
    }

    public function test()
    {
        return 'Test';
    }
}