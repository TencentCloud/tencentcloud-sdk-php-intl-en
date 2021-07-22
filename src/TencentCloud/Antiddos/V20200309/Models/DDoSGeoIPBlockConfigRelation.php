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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-DDoS region blocking configuration details
 *
 * @method DDoSGeoIPBlockConfig getGeoIPBlockConfig() Obtain Anti-DDoS region blocking configuration
 * @method void setGeoIPBlockConfig(DDoSGeoIPBlockConfig $GeoIPBlockConfig) Set Anti-DDoS region blocking configuration
 * @method array getInstanceDetailList() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetailList(array $InstanceDetailList) Set Anti-DDoS instance configured
 */
class DDoSGeoIPBlockConfigRelation extends AbstractModel
{
    /**
     * @var DDoSGeoIPBlockConfig Anti-DDoS region blocking configuration
     */
    public $GeoIPBlockConfig;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetailList;

    /**
     * @param DDoSGeoIPBlockConfig $GeoIPBlockConfig Anti-DDoS region blocking configuration
     * @param array $InstanceDetailList Anti-DDoS instance configured
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
        if (array_key_exists("GeoIPBlockConfig",$param) and $param["GeoIPBlockConfig"] !== null) {
            $this->GeoIPBlockConfig = new DDoSGeoIPBlockConfig();
            $this->GeoIPBlockConfig->deserialize($param["GeoIPBlockConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
