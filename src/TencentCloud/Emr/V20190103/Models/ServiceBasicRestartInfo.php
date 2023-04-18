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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The services to operate on
 *
 * @method string getServiceName() Obtain The service name (required), such as HDFS.
 * @method void setServiceName(string $ServiceName) Set The service name (required), such as HDFS.
 * @method array getComponentInfoList() Obtain If it is left empty, all processes will be operated on.
 * @method void setComponentInfoList(array $ComponentInfoList) Set If it is left empty, all processes will be operated on.
 */
class ServiceBasicRestartInfo extends AbstractModel
{
    /**
     * @var string The service name (required), such as HDFS.
     */
    public $ServiceName;

    /**
     * @var array If it is left empty, all processes will be operated on.
     */
    public $ComponentInfoList;

    /**
     * @param string $ServiceName The service name (required), such as HDFS.
     * @param array $ComponentInfoList If it is left empty, all processes will be operated on.
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ComponentInfoList",$param) and $param["ComponentInfoList"] !== null) {
            $this->ComponentInfoList = [];
            foreach ($param["ComponentInfoList"] as $key => $value){
                $obj = new ComponentBasicRestartInfo();
                $obj->deserialize($value);
                array_push($this->ComponentInfoList, $obj);
            }
        }
    }
}
