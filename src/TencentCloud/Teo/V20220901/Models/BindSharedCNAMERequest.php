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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindSharedCNAME request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the acceleration domain name.	
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the acceleration domain name.	
 * @method string getBindType() Obtain Action type. Values:
<li>`bind`: To bind</li>
<li>`unbind`: To unbind</li>
 * @method void setBindType(string $BindType) Set Action type. Values:
<li>`bind`: To bind</li>
<li>`unbind`: To unbind</li>
 * @method array getBindSharedCNAMEMaps() Obtain Bindings between domain names and a shared CNAME
 * @method void setBindSharedCNAMEMaps(array $BindSharedCNAMEMaps) Set Bindings between domain names and a shared CNAME
 */
class BindSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the acceleration domain name.	
     */
    public $ZoneId;

    /**
     * @var string Action type. Values:
<li>`bind`: To bind</li>
<li>`unbind`: To unbind</li>
     */
    public $BindType;

    /**
     * @var array Bindings between domain names and a shared CNAME
     */
    public $BindSharedCNAMEMaps;

    /**
     * @param string $ZoneId ID of the site related with the acceleration domain name.	
     * @param string $BindType Action type. Values:
<li>`bind`: To bind</li>
<li>`unbind`: To unbind</li>
     * @param array $BindSharedCNAMEMaps Bindings between domain names and a shared CNAME
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("BindSharedCNAMEMaps",$param) and $param["BindSharedCNAMEMaps"] !== null) {
            $this->BindSharedCNAMEMaps = [];
            foreach ($param["BindSharedCNAMEMaps"] as $key => $value){
                $obj = new BindSharedCNAMEMap();
                $obj->deserialize($value);
                array_push($this->BindSharedCNAMEMaps, $obj);
            }
        }
    }
}
