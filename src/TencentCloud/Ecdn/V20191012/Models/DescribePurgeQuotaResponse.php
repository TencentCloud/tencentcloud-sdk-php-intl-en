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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeQuota response structure.
 *
 * @method Quota getUrlPurge() Obtain URL purge usage and quota.
 * @method void setUrlPurge(Quota $UrlPurge) Set URL purge usage and quota.
 * @method Quota getPathPurge() Obtain Directory purge usage and quota.
 * @method void setPathPurge(Quota $PathPurge) Set Directory purge usage and quota.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePurgeQuotaResponse extends AbstractModel
{
    /**
     * @var Quota URL purge usage and quota.
     */
    public $UrlPurge;

    /**
     * @var Quota Directory purge usage and quota.
     */
    public $PathPurge;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param Quota $UrlPurge URL purge usage and quota.
     * @param Quota $PathPurge Directory purge usage and quota.
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
        if (array_key_exists("UrlPurge",$param) and $param["UrlPurge"] !== null) {
            $this->UrlPurge = new Quota();
            $this->UrlPurge->deserialize($param["UrlPurge"]);
        }

        if (array_key_exists("PathPurge",$param) and $param["PathPurge"] !== null) {
            $this->PathPurge = new Quota();
            $this->PathPurge->deserialize($param["PathPurge"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
