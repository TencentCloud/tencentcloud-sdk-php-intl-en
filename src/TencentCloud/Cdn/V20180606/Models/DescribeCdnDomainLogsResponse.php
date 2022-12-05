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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdnDomainLogs response structure.
 *
 * @method array getDomainLogs() Obtain Download link of the log package.
You can open the link to download a .gz log package that contains all log files without extension.
 * @method void setDomainLogs(array $DomainLogs) Set Download link of the log package.
You can open the link to download a .gz log package that contains all log files without extension.
 * @method integer getTotalCount() Obtain Total number of entries obtained
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries obtained
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCdnDomainLogsResponse extends AbstractModel
{
    /**
     * @var array Download link of the log package.
You can open the link to download a .gz log package that contains all log files without extension.
     */
    public $DomainLogs;

    /**
     * @var integer Total number of entries obtained
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DomainLogs Download link of the log package.
You can open the link to download a .gz log package that contains all log files without extension.
     * @param integer $TotalCount Total number of entries obtained
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
        if (array_key_exists("DomainLogs",$param) and $param["DomainLogs"] !== null) {
            $this->DomainLogs = [];
            foreach ($param["DomainLogs"] as $key => $value){
                $obj = new DomainLog();
                $obj->deserialize($value);
                array_push($this->DomainLogs, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
