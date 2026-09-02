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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAssetSecurityAnalysisSwitch request structure.
 *
 * @method array getInstances() Obtain Instance information
 * @method void setInstances(array $Instances) Set Instance information
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method integer getEnable() Obtain Switch. 1: on. 0: off.
 * @method void setEnable(integer $Enable) Set Switch. 1: on. 0: off.
 */
class ModifyDspmAssetSecurityAnalysisSwitchRequest extends AbstractModel
{
    /**
     * @var array Instance information
     */
    public $Instances;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var integer Switch. 1: on. 0: off.
     */
    public $Enable;

    /**
     * @param array $Instances Instance information
     * @param array $MemberId Group Account Member ID
     * @param integer $Enable Switch. 1: on. 0: off.
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
        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new DspmAssetInstance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
