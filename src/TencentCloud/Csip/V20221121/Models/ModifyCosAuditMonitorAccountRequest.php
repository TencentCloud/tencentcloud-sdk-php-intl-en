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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditMonitorAccount request structure.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method array getMonitorAppIdSet() Obtain appid information to monitor
 * @method void setMonitorAppIdSet(array $MonitorAppIdSet) Set appid information to monitor
 * @method array getBindBucket() Obtain Select a bucket mapping relationship
 * @method void setBindBucket(array $BindBucket) Set Select a bucket mapping relationship
 */
class ModifyCosAuditMonitorAccountRequest extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var array appid information to monitor
     */
    public $MonitorAppIdSet;

    /**
     * @var array Select a bucket mapping relationship
     */
    public $BindBucket;

    /**
     * @param string $ResourceId Resource ID
     * @param array $MonitorAppIdSet appid information to monitor
     * @param array $BindBucket Select a bucket mapping relationship
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("MonitorAppIdSet",$param) and $param["MonitorAppIdSet"] !== null) {
            $this->MonitorAppIdSet = $param["MonitorAppIdSet"];
        }

        if (array_key_exists("BindBucket",$param) and $param["BindBucket"] !== null) {
            $this->BindBucket = [];
            foreach ($param["BindBucket"] as $key => $value){
                $obj = new CosBucketId();
                $obj->deserialize($value);
                array_push($this->BindBucket, $obj);
            }
        }
    }
}
