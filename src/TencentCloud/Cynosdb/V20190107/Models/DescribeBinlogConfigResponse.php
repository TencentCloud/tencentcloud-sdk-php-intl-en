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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBinlogConfig response structure.
 *
 * @method string getBinlogCrossRegionsConfigUpdateTime() Obtain Configuration update time for cross-regional Binlog.
 * @method void setBinlogCrossRegionsConfigUpdateTime(string $BinlogCrossRegionsConfigUpdateTime) Set Configuration update time for cross-regional Binlog.
 * @method BinlogConfigInfo getBinlogConfig() Obtain Specifies the Binlog configuration message.
 * @method void setBinlogConfig(BinlogConfigInfo $BinlogConfig) Set Specifies the Binlog configuration message.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBinlogConfigResponse extends AbstractModel
{
    /**
     * @var string Configuration update time for cross-regional Binlog.
     */
    public $BinlogCrossRegionsConfigUpdateTime;

    /**
     * @var BinlogConfigInfo Specifies the Binlog configuration message.
     */
    public $BinlogConfig;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BinlogCrossRegionsConfigUpdateTime Configuration update time for cross-regional Binlog.
     * @param BinlogConfigInfo $BinlogConfig Specifies the Binlog configuration message.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("BinlogCrossRegionsConfigUpdateTime",$param) and $param["BinlogCrossRegionsConfigUpdateTime"] !== null) {
            $this->BinlogCrossRegionsConfigUpdateTime = $param["BinlogCrossRegionsConfigUpdateTime"];
        }

        if (array_key_exists("BinlogConfig",$param) and $param["BinlogConfig"] !== null) {
            $this->BinlogConfig = new BinlogConfigInfo();
            $this->BinlogConfig->deserialize($param["BinlogConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
