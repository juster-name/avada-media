<?php
require_once "IBuilder.php";

class Director
{
    private IBuilder $builder;

    public function __construct(IBuilder $builder)
    {
        $this->setBuilder($builder);
    }

    public function setBuilder(IBuilder $builder) : void
    {
        $this->builder = $builder;
    }

    public function createGamingPC() : PC
    {
        $this->builder->reset();

        $this->builder->setMotherboard("Asus ROG MAXIMUS XII FORMULA ATX LGA1200");
        $this->builder->setProcessor("Intel Core i9-10900K 3.7 GHz 10-Core");
        $this->builder->setGraphics("NVIDIA GeForce RTX 3090 24 GB Founders Edition");
        $this->builder->setRAM("Corsair Vengeance RGB Pro 64 GB (4 x 16 GB) DDR4-3200 CL16");
        $this->builder->setPSU("EVGA P2 1600 W 80+ Platinum Certified Fully-Modular ATX");
        $this->builder->setStorage("Samsung 980 Pro 1 TB M.2-2280 NVME SSD");

        return $this->builder->getPC();
    }
    
    public function createOfficePC() : PC
    {
        $this->builder->reset();

        $this->builder->setMotherboard("Asus Prime B450M-A II Micro ATX AM4 Motherboard");
        $this->builder->setProcessor("AMD Ryzen 3 2200G 3.5 GHz Quad-Core Processor");
        $this->builder->setGraphics("Integral Radeon Vega 8 Graphics");
        $this->builder->setRAM("Patriot Viper 4 8 GB (2 x 8 GB) DDR4-3000 CL16 Memory");
        $this->builder->setPSU("Corsair CXM (2015) 450 W 80+ Bronze Certified Semi-modular ATX Power Supply");
        $this->builder->setStorage("Klevv CRAS C710 512 GB M.2-2280 NVME Solid State Drive");

        return $this->builder->getPC();
    }
}

?>