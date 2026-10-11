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
 * Scope of service operations.
 *
 * @method string getServiceName() Obtain Service name, required. Example: HDFS.
 * @method void setServiceName(string $ServiceName) Set Service name, required. Example: HDFS.
 * @method array getComponentInfoList() Obtain If not provided, it indicates all processes.
 * @method void setComponentInfoList(array $ComponentInfoList) Set If not provided, it indicates all processes.
 */
class ServiceBasicRestartInfo extends AbstractModel
{
    /**
     * @var string Service name, required. Example: HDFS.
     */
    public $ServiceName;

    /**
     * @var array If not provided, it indicates all processes.
     */
    public $ComponentInfoList;

    /**
     * @param string $ServiceName Service name, required. Example: HDFS.
     * @param array $ComponentInfoList If not provided, it indicates all processes.
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
