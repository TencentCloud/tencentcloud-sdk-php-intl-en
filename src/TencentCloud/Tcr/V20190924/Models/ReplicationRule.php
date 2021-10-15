<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Synchronization rule
 *
 * @method string getName() Obtain Name of synchronization rule
 * @method void setName(string $Name) Set Name of synchronization rule
 * @method string getDestNamespace() Obtain Destination namespace
 * @method void setDestNamespace(string $DestNamespace) Set Destination namespace
 * @method boolean getOverride() Obtain Whether to override
 * @method void setOverride(boolean $Override) Set Whether to override
 * @method array getFilters() Obtain Synchronization filters
 * @method void setFilters(array $Filters) Set Synchronization filters
 */
class ReplicationRule extends AbstractModel
{
    /**
     * @var string Name of synchronization rule
     */
    public $Name;

    /**
     * @var string Destination namespace
     */
    public $DestNamespace;

    /**
     * @var boolean Whether to override
     */
    public $Override;

    /**
     * @var array Synchronization filters
     */
    public $Filters;

    /**
     * @param string $Name Name of synchronization rule
     * @param string $DestNamespace Destination namespace
     * @param boolean $Override Whether to override
     * @param array $Filters Synchronization filters
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DestNamespace",$param) and $param["DestNamespace"] !== null) {
            $this->DestNamespace = $param["DestNamespace"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ReplicationFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
