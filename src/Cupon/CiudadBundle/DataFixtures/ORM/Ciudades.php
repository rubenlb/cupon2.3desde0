<?php
namespace Cupon\CiudadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;

/**
 * Fixtures de la entidad Ciudad.
 * Crea 25 ciudades para poder probar la aplicación.
 */
class Ciudades extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        // Los 25 municipios más poblados de España según el INE
        // fuente: http://es.wikipedia.org/wiki/Municipios_de_Espa%C3%B1a_por_poblaci%C3%B3n

        $ciudades = array(
            'Madrid',
            'Barcelona',
            'Valencia',
            'Sevilla',
            'Zaragoza',
            'Málaga',
            'Murcia',
            'Palma de Mallorca',
            'Las Palmas de Gran Canaria'
        );

        foreach ($ciudades as $nombre) {
            $ciudad = new Ciudad();
            $ciudad->setNombre($nombre);

            $manager->persist($ciudad);
        }

        $manager->flush();
    }
}
