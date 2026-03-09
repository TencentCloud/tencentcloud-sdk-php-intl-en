<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Opened resource group information.
 *
 * @method string getResourceGroupType() Obtain Resource group type

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
 * @method void setResourceGroupType(string $ResourceGroupType) Set Resource group type

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
 * @method IntegrationResource getIntegration() Obtain Integration resource group, segmentation of real-time resource group and offline resource group (simultaneous purchase of integration, scheduling, and data service resource group not allowed).
 * @method void setIntegration(IntegrationResource $Integration) Set Integration resource group, segmentation of real-time resource group and offline resource group (simultaneous purchase of integration, scheduling, and data service resource group not allowed).
 * @method ResourceGroupSpecification getSchedule() Obtain Scheduling resource group (simultaneous purchase of integration, scheduling, and data service resource groups is not allowed).

-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).



 * @method void setSchedule(ResourceGroupSpecification $Schedule) Set Scheduling resource group (simultaneous purchase of integration, scheduling, and data service resource groups is not allowed).

-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).



 * @method ResourceGroupSpecification getDataService() Obtain Data service resource group (seamless integration, scheduling, simultaneous purchase not allowed).

-ds_t(Test specification).
-ds_s (basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
 * @method void setDataService(ResourceGroupSpecification $DataService) Set Data service resource group (seamless integration, scheduling, simultaneous purchase not allowed).

-ds_t(Test specification).
-ds_s (basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
 */
class ResourceType extends AbstractModel
{
    /**
     * @var string Resource group type

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
     */
    public $ResourceGroupType;

    /**
     * @var IntegrationResource Integration resource group, segmentation of real-time resource group and offline resource group (simultaneous purchase of integration, scheduling, and data service resource group not allowed).
     */
    public $Integration;

    /**
     * @var ResourceGroupSpecification Scheduling resource group (simultaneous purchase of integration, scheduling, and data service resource groups is not allowed).

-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).



     */
    public $Schedule;

    /**
     * @var ResourceGroupSpecification Data service resource group (seamless integration, scheduling, simultaneous purchase not allowed).

-ds_t(Test specification).
-ds_s (basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
     */
    public $DataService;

    /**
     * @param string $ResourceGroupType Resource group type

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
     * @param IntegrationResource $Integration Integration resource group, segmentation of real-time resource group and offline resource group (simultaneous purchase of integration, scheduling, and data service resource group not allowed).
     * @param ResourceGroupSpecification $Schedule Scheduling resource group (simultaneous purchase of integration, scheduling, and data service resource groups is not allowed).

-test specification.
-S_small (basic specification).
-S_medium (general specifications).
-S_large (professional specification).



     * @param ResourceGroupSpecification $DataService Data service resource group (seamless integration, scheduling, simultaneous purchase not allowed).

-ds_t(Test specification).
-ds_s (basic specification).
-ds_m (general specifications).
-ds_l (professional specification).
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResourceGroupType",$param) and $param["ResourceGroupType"] !== null) {
            $this->ResourceGroupType = $param["ResourceGroupType"];
        }

        if (array_key_exists("Integration",$param) and $param["Integration"] !== null) {
            $this->Integration = new IntegrationResource();
            $this->Integration->deserialize($param["Integration"]);
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new ResourceGroupSpecification();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("DataService",$param) and $param["DataService"] !== null) {
            $this->DataService = new ResourceGroupSpecification();
            $this->DataService->deserialize($param["DataService"]);
        }
    }
}
