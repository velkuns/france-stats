<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Application\Domain\Unemployment\Infrastructure\Mapper\Abstracts;

use Eureka\Component\Database\ConnectionFactory;
use Eureka\Component\Orm\RepositoryInterface;
use Eureka\Component\Orm\Traits;
use Eureka\Component\Validation\Entity\ValidatorEntityFactory;
use Eureka\Component\Validation\ValidatorFactoryInterface;
use Application\Domain\Unemployment\Entity\UnemploymentValue;
use Application\Domain\Unemployment\Repository\UnemploymentValueRepositoryInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Abstract UnemploymentValue mapper class.
 *
 * /!\ AUTO GENERATED FILE. DO NOT EDIT THIS FILE.
 * You can add your specific code in child class: UnemploymentValueMapper
 *
 * @author Eureka Orm Generator
 */
abstract class AbstractUnemploymentValueMapper
{
    /** @use Traits\CacheAwareTrait<UnemploymentValueRepositoryInterface, UnemploymentValue> */
    use Traits\CacheAwareTrait;
    use Traits\ConnectionAwareTrait;
    /** @use Traits\EntityAwareTrait<UnemploymentValue> */
    use Traits\EntityAwareTrait;
    /** @use Traits\MapperTrait<UnemploymentValueRepositoryInterface, UnemploymentValue> */
    use Traits\MapperTrait;
    use Traits\TableTrait;
    use Traits\ValidatorAwareTrait;

    /**
     * @param array<class-string, RepositoryInterface> $mappers
     */
    public function __construct(
        string $connectionName,
        ConnectionFactory $connectionFactory,
        ValidatorFactoryInterface|null $validatorFactory = null,
        ValidatorEntityFactory|null $validatorEntityFactory = null,
        array $mappers = [],
        CacheItemPoolInterface|null $cache = null,
        bool $enableCacheOnRead = false,
    ) {
        $this->setConnectionName($connectionName);
        $this->setConnectionFactory($connectionFactory);
        $this->setCache($cache);
        $this->setValidatorFactories($validatorFactory, $validatorEntityFactory);

        $this->addMappers($mappers);

        if ($enableCacheOnRead) {
            $this->enableCacheOnRead();
        }

        $this->initialize();
    }

    /**
     * Initialize mapper with proper values for mapped table.
     */
    protected function initialize(): void
    {
        $this->setEntityClass(UnemploymentValue::class);
        $this->setTable('unemployment_value');

        $this->initializeFields();
        $this->initializeMapping();
        $this->initializeValidatorConfig();
        $this->initializeJoinConfigs();
    }

    protected function initializeFields(): void
    {
        $this->setFields([
            'unemployment_value_id',
            'unemployment_id',
            'unemployment_value_year',
            'unemployment_value_quarter',
            'unemployment_value_number',
            'unemployment_value_multiplicator',
            'unemployment_value_date_origin',
            'unemployment_value_date_update',
        ]);

        $this->setPrimaryKeys([
            'unemployment_value_id',
        ]);
    }

    protected function initializeMapping(): void
    {
        $this->setNamesMap([
            'unemployment_value_id' => [
                'get'      => 'getId',
                'set'      => 'setId',
                'property' => 'id',
            ],
            'unemployment_id' => [
                'get'      => 'getUnemploymentId',
                'set'      => 'setUnemploymentId',
                'property' => 'unemploymentId',
            ],
            'unemployment_value_year' => [
                'get'      => 'getYear',
                'set'      => 'setYear',
                'property' => 'year',
            ],
            'unemployment_value_quarter' => [
                'get'      => 'getQuarter',
                'set'      => 'setQuarter',
                'property' => 'quarter',
            ],
            'unemployment_value_number' => [
                'get'      => 'getNumber',
                'set'      => 'setNumber',
                'property' => 'number',
            ],
            'unemployment_value_multiplicator' => [
                'get'      => 'getMultiplicator',
                'set'      => 'setMultiplicator',
                'property' => 'multiplicator',
            ],
            'unemployment_value_date_origin' => [
                'get'      => 'getDateOrigin',
                'set'      => 'setDateOrigin',
                'property' => 'dateOrigin',
            ],
            'unemployment_value_date_update' => [
                'get'      => 'getDateUpdate',
                'set'      => 'setDateUpdate',
                'property' => 'dateUpdate',
            ],
        ]);
    }

    protected function initializeValidatorConfig(): void
    {
        $this->setValidatorConfig([
            'unemployment_value_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'unemployment_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'unemployment_value_year' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 65535],
            ],
            'unemployment_value_quarter' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 255],
            ],
            'unemployment_value_number' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'unemployment_value_multiplicator' => [
                'type'      => 'float',
                'options'   => [],
            ],
            'unemployment_value_date_origin' => [
                'type'      => 'datetime',
                'options'   => [],
            ],
            'unemployment_value_date_update' => [
                'type'      => 'datetime',
                'options'   => [],
            ],
        ]);
    }

    protected function initializeJoinConfigs(): void
    {
        $this->setJoinConfigs([
        ]);
    }
}
