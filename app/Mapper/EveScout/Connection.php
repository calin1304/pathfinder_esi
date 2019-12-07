<?php


namespace Exodus4D\ESI\Mapper\EveScout;

use data\mapper;

class Connection extends mapper\AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'id'                                => 'id',
        'type'                              => 'type',
        'status'                            => 'status',
        //'signatureId'               => ['signature' => 'name'],

        //'sourceSolarSystem'                 => 'source',
        //'destinationSolarSystem'            => 'target',

        'solarSystemId'                     => ['source' => 'id'],
        'wormholeDestinationSolarSystemId'  => ['target' => 'id'],

        'signatureId'                       => ['sourceSignature' => 'name'],
        'wormholeDestinationSignatureId'    => ['targetSignature' => 'name'],
        //'wormholeMass'              => 'wormholeMass',
        //'wormholeEol'               => 'wormholeEol'
        'wormholeMass'                      => ['wormhole' => 'mass'],
        'wormholeEol'                       => ['wormhole' => 'eol'],

        'createdAt'                         => ['created' => 'created'],
        'updatedAt'                         => ['updated' => 'updated']


    ];
}