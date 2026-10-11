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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared component information.
 *
 * @method string getShareType() Obtain Shared component type. Valid values: EMR and CUSTOM.
 * @method void setShareType(string $ShareType) Set Shared component type. Valid values: EMR and CUSTOM.
 * @method string getService() Obtain Shared component name.
 * @method void setService(string $Service) Set Shared component name.
 * @method string getInstanceId() Obtain Shared component cluster.
 * @method void setInstanceId(string $InstanceId) Set Shared component cluster.
 * @method array getCustomServiceDefineList() Obtain Custom parameter collection.
 * @method void setCustomServiceDefineList(array $CustomServiceDefineList) Set Custom parameter collection.
 */
class ExternalService extends AbstractModel
{
    /**
     * @var string Shared component type. Valid values: EMR and CUSTOM.
     */
    public $ShareType;

    /**
     * @var string Shared component name.
     */
    public $Service;

    /**
     * @var string Shared component cluster.
     */
    public $InstanceId;

    /**
     * @var array Custom parameter collection.
     */
    public $CustomServiceDefineList;

    /**
     * @param string $ShareType Shared component type. Valid values: EMR and CUSTOM.
     * @param string $Service Shared component name.
     * @param string $InstanceId Shared component cluster.
     * @param array $CustomServiceDefineList Custom parameter collection.
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
        if (array_key_exists("ShareType",$param) and $param["ShareType"] !== null) {
            $this->ShareType = $param["ShareType"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CustomServiceDefineList",$param) and $param["CustomServiceDefineList"] !== null) {
            $this->CustomServiceDefineList = [];
            foreach ($param["CustomServiceDefineList"] as $key => $value){
                $obj = new CustomServiceDefine();
                $obj->deserialize($value);
                array_push($this->CustomServiceDefineList, $obj);
            }
        }
    }
}
