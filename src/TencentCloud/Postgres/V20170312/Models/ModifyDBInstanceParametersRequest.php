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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceParameters request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method array getParamList() Obtain Parameters to be modified and expected values.
 * @method void setParamList(array $ParamList) Set Parameters to be modified and expected values.
 */
class ModifyDBInstanceParametersRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var array Parameters to be modified and expected values.
     */
    public $ParamList;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param array $ParamList Parameters to be modified and expected values.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamEntry();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
