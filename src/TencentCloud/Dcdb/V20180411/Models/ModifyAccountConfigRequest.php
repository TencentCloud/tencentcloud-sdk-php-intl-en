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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of  `tdsqlshard-kpkvq5oj`, which is the same as the one displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of  `tdsqlshard-kpkvq5oj`, which is the same as the one displayed in the TencentDB console.
 * @method string getUserName() Obtain Account name
 * @method void setUserName(string $UserName) Set Account name
 * @method string getHost() Obtain Account domain name
 * @method void setHost(string $Host) Set Account domain name
 * @method array getConfigs() Obtain Configuration list. Each element in the list is a pair of `Config` and `Value`.
 * @method void setConfigs(array $Configs) Set Configuration list. Each element in the list is a pair of `Config` and `Value`.
 */
class ModifyAccountConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of  `tdsqlshard-kpkvq5oj`, which is the same as the one displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Account name
     */
    public $UserName;

    /**
     * @var string Account domain name
     */
    public $Host;

    /**
     * @var array Configuration list. Each element in the list is a pair of `Config` and `Value`.
     */
    public $Configs;

    /**
     * @param string $InstanceId Instance ID in the format of  `tdsqlshard-kpkvq5oj`, which is the same as the one displayed in the TencentDB console.
     * @param string $UserName Account name
     * @param string $Host Account domain name
     * @param array $Configs Configuration list. Each element in the list is a pair of `Config` and `Value`.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new ConfigValue();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
