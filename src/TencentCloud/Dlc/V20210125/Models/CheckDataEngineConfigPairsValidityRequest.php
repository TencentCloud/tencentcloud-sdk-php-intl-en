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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDataEngineConfigPairsValidity request structure.
 *
 * @method string getChildImageVersionId() Obtain ID of the minor version of the engine
 * @method void setChildImageVersionId(string $ChildImageVersionId) Set ID of the minor version of the engine
 * @method array getDataEngineConfigPairs() Obtain User-defined parameters
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) Set User-defined parameters
 * @method string getImageVersionId() Obtain ID of the major version of the engine. If there is the ID of the minor version, only the ID of the minor version needs to be input. If not, the latest ID of the minor version under the major version will be acquired.
 * @method void setImageVersionId(string $ImageVersionId) Set ID of the major version of the engine. If there is the ID of the minor version, only the ID of the minor version needs to be input. If not, the latest ID of the minor version under the major version will be acquired.
 */
class CheckDataEngineConfigPairsValidityRequest extends AbstractModel
{
    /**
     * @var string ID of the minor version of the engine
     */
    public $ChildImageVersionId;

    /**
     * @var array User-defined parameters
     */
    public $DataEngineConfigPairs;

    /**
     * @var string ID of the major version of the engine. If there is the ID of the minor version, only the ID of the minor version needs to be input. If not, the latest ID of the minor version under the major version will be acquired.
     */
    public $ImageVersionId;

    /**
     * @param string $ChildImageVersionId ID of the minor version of the engine
     * @param array $DataEngineConfigPairs User-defined parameters
     * @param string $ImageVersionId ID of the major version of the engine. If there is the ID of the minor version, only the ID of the minor version needs to be input. If not, the latest ID of the minor version under the major version will be acquired.
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
        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }
    }
}
