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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAcRules request structure.
 *
 * @method array getData() Obtain Creates rule data
 * @method void setData(array $Data) Set Creates rule data
 * @method integer getType() Obtain 0: add (default); 1: insert
 * @method void setType(integer $Type) Set 0: add (default); 1: insert
 * @method string getEdgeId() Obtain Edge ID
 * @method void setEdgeId(string $EdgeId) Set Edge ID
 * @method integer getEnable() Obtain Access control rule status
 * @method void setEnable(integer $Enable) Set Access control rule status
 * @method integer getOverwrite() Obtain 0: add; 1: overwrite
 * @method void setOverwrite(integer $Overwrite) Set 0: add; 1: overwrite
 * @method string getInstanceId() Obtain NAT instance ID, required when the parameter Area exists
 * @method void setInstanceId(string $InstanceId) Set NAT instance ID, required when the parameter Area exists
 * @method string getFrom() Obtain portScan: from port scanning; patchImport: from batch import
 * @method void setFrom(string $From) Set portScan: from port scanning; patchImport: from batch import
 * @method string getArea() Obtain NAT region
 * @method void setArea(string $Area) Set NAT region
 */
class CreateAcRulesRequest extends AbstractModel
{
    /**
     * @var array Creates rule data
     */
    public $Data;

    /**
     * @var integer 0: add (default); 1: insert
     */
    public $Type;

    /**
     * @var string Edge ID
     */
    public $EdgeId;

    /**
     * @var integer Access control rule status
     */
    public $Enable;

    /**
     * @var integer 0: add; 1: overwrite
     */
    public $Overwrite;

    /**
     * @var string NAT instance ID, required when the parameter Area exists
     */
    public $InstanceId;

    /**
     * @var string portScan: from port scanning; patchImport: from batch import
     */
    public $From;

    /**
     * @var string NAT region
     */
    public $Area;

    /**
     * @param array $Data Creates rule data
     * @param integer $Type 0: add (default); 1: insert
     * @param string $EdgeId Edge ID
     * @param integer $Enable Access control rule status
     * @param integer $Overwrite 0: add; 1: overwrite
     * @param string $InstanceId NAT instance ID, required when the parameter Area exists
     * @param string $From portScan: from port scanning; patchImport: from batch import
     * @param string $Area NAT region
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new RuleInfoData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Overwrite",$param) and $param["Overwrite"] !== null) {
            $this->Overwrite = $param["Overwrite"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
