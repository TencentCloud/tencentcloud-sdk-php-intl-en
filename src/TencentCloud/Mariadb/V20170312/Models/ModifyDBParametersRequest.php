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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBParameters request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `tdsql-ow728lmc`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `tdsql-ow728lmc`.
 * @method array getParams() Obtain Parameter list. Each element is a combination of `Param` and `Value`.
 * @method void setParams(array $Params) Set Parameter list. Each element is a combination of `Param` and `Value`.
 */
class ModifyDBParametersRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `tdsql-ow728lmc`.
     */
    public $InstanceId;

    /**
     * @var array Parameter list. Each element is a combination of `Param` and `Value`.
     */
    public $Params;

    /**
     * @param string $InstanceId Instance ID in the format of `tdsql-ow728lmc`.
     * @param array $Params Parameter list. Each element is a combination of `Param` and `Value`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}
