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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getClusterId() Obtain 
 * @method void setClusterId(string $ClusterId) Set 
 * @method array getClusterParamList() Obtain Cluster parameter modification data.
 * @method void setClusterParamList(array $ClusterParamList) Set Cluster parameter modification data.
 * @method array getModifyInstanceParams() Obtain Instance parameter modification data.
 * @method void setModifyInstanceParams(array $ModifyInstanceParams) Set Instance parameter modification data.
 */
class BizTaskModifyParamsData extends AbstractModel
{
    /**
     * @var string 
     */
    public $ClusterId;

    /**
     * @var array Cluster parameter modification data.
     */
    public $ClusterParamList;

    /**
     * @var array Instance parameter modification data.
     */
    public $ModifyInstanceParams;

    /**
     * @param string $ClusterId 
     * @param array $ClusterParamList Cluster parameter modification data.
     * @param array $ModifyInstanceParams Instance parameter modification data.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterParamList",$param) and $param["ClusterParamList"] !== null) {
            $this->ClusterParamList = [];
            foreach ($param["ClusterParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParamList, $obj);
            }
        }

        if (array_key_exists("ModifyInstanceParams",$param) and $param["ModifyInstanceParams"] !== null) {
            $this->ModifyInstanceParams = [];
            foreach ($param["ModifyInstanceParams"] as $key => $value){
                $obj = new BizTaskModifyInstanceParam();
                $obj->deserialize($value);
                array_push($this->ModifyInstanceParams, $obj);
            }
        }
    }
}
