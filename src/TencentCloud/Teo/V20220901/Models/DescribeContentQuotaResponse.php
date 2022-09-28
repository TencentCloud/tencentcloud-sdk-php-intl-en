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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContentQuota response structure.
 *
 * @method array getPurgeQuota() Obtain Purging quotas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPurgeQuota(array $PurgeQuota) Set Purging quotas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrefetchQuota() Obtain Pre-warming quotas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrefetchQuota(array $PrefetchQuota) Set Pre-warming quotas.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeContentQuotaResponse extends AbstractModel
{
    /**
     * @var array Purging quotas.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PurgeQuota;

    /**
     * @var array Pre-warming quotas.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrefetchQuota;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $PurgeQuota Purging quotas.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PrefetchQuota Pre-warming quotas.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PurgeQuota",$param) and $param["PurgeQuota"] !== null) {
            $this->PurgeQuota = [];
            foreach ($param["PurgeQuota"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->PurgeQuota, $obj);
            }
        }

        if (array_key_exists("PrefetchQuota",$param) and $param["PrefetchQuota"] !== null) {
            $this->PrefetchQuota = [];
            foreach ($param["PrefetchQuota"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->PrefetchQuota, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
