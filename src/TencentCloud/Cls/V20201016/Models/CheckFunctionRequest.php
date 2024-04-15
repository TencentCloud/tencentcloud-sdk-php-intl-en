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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFunction request structure.
 *
 * @method string getEtlContent() Obtain Processing statement entered by the user
 * @method void setEtlContent(string $EtlContent) Set Processing statement entered by the user
 * @method array getDstResources() Obtain Target topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Target topic ID and alias of the data processing task
 * @method integer getFuncType() Obtain Type of the target topic for data processing. Valid values: 1 (fixed Topic) and 2 (dynamic creation)
 * @method void setFuncType(integer $FuncType) Set Type of the target topic for data processing. Valid values: 1 (fixed Topic) and 2 (dynamic creation)
 */
class CheckFunctionRequest extends AbstractModel
{
    /**
     * @var string Processing statement entered by the user
     */
    public $EtlContent;

    /**
     * @var array Target topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var integer Type of the target topic for data processing. Valid values: 1 (fixed Topic) and 2 (dynamic creation)
     */
    public $FuncType;

    /**
     * @param string $EtlContent Processing statement entered by the user
     * @param array $DstResources Target topic ID and alias of the data processing task
     * @param integer $FuncType Type of the target topic for data processing. Valid values: 1 (fixed Topic) and 2 (dynamic creation)
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
        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }
    }
}
