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
 * Bootstrap script response package.
 *
 * @method array getResourceAfter() Obtain Custom script file when resource initialization ends.
 * @method void setResourceAfter(array $ResourceAfter) Set Custom script file when resource initialization ends.
 * @method array getClusterBefore() Obtain Custom script file before cluster startup.
 * @method void setClusterBefore(array $ClusterBefore) Set Custom script file before cluster startup.
 * @method array getClusterAfter() Obtain Custom script file after cluster startup.
 * @method void setClusterAfter(array $ClusterAfter) Set Custom script file after cluster startup.
 * @method array getServiceBefore() Obtain Custom script before service decommissioning.
 * @method void setServiceBefore(array $ServiceBefore) Set Custom script before service decommissioning.
 */
class DescribeBootScriptRsp extends AbstractModel
{
    /**
     * @var array Custom script file when resource initialization ends.
     */
    public $ResourceAfter;

    /**
     * @var array Custom script file before cluster startup.
     */
    public $ClusterBefore;

    /**
     * @var array Custom script file after cluster startup.
     */
    public $ClusterAfter;

    /**
     * @var array Custom script before service decommissioning.
     */
    public $ServiceBefore;

    /**
     * @param array $ResourceAfter Custom script file when resource initialization ends.
     * @param array $ClusterBefore Custom script file before cluster startup.
     * @param array $ClusterAfter Custom script file after cluster startup.
     * @param array $ServiceBefore Custom script before service decommissioning.
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
        if (array_key_exists("ResourceAfter",$param) and $param["ResourceAfter"] !== null) {
            $this->ResourceAfter = [];
            foreach ($param["ResourceAfter"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ResourceAfter, $obj);
            }
        }

        if (array_key_exists("ClusterBefore",$param) and $param["ClusterBefore"] !== null) {
            $this->ClusterBefore = [];
            foreach ($param["ClusterBefore"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ClusterBefore, $obj);
            }
        }

        if (array_key_exists("ClusterAfter",$param) and $param["ClusterAfter"] !== null) {
            $this->ClusterAfter = [];
            foreach ($param["ClusterAfter"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ClusterAfter, $obj);
            }
        }

        if (array_key_exists("ServiceBefore",$param) and $param["ServiceBefore"] !== null) {
            $this->ServiceBefore = [];
            foreach ($param["ServiceBefore"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ServiceBefore, $obj);
            }
        }
    }
}
