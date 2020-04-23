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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPerformance response structure.
 *
 * @method MonitorData getLongQuery() Obtain Number of slow queries
 * @method void setLongQuery(MonitorData $LongQuery) Set Number of slow queries
 * @method MonitorData getSelectTotal() Obtain Number of SELECT operations
 * @method void setSelectTotal(MonitorData $SelectTotal) Set Number of SELECT operations
 * @method MonitorData getUpdateTotal() Obtain Number of UPDATE operations
 * @method void setUpdateTotal(MonitorData $UpdateTotal) Set Number of UPDATE operations
 * @method MonitorData getInsertTotal() Obtain Number of INSERT operations
 * @method void setInsertTotal(MonitorData $InsertTotal) Set Number of INSERT operations
 * @method MonitorData getDeleteTotal() Obtain Number of DELETE operations
 * @method void setDeleteTotal(MonitorData $DeleteTotal) Set Number of DELETE operations
 * @method MonitorData getMemHitRate() Obtain Cache hit rate
 * @method void setMemHitRate(MonitorData $MemHitRate) Set Cache hit rate
 * @method MonitorData getDiskIops() Obtain Number of disk IOs per second
 * @method void setDiskIops(MonitorData $DiskIops) Set Number of disk IOs per second
 * @method MonitorData getConnActive() Obtain Number of active connections
 * @method void setConnActive(MonitorData $ConnActive) Set Number of active connections
 * @method MonitorData getIsMasterSwitched() Obtain Whether master/slave switch occurred. 1: yes, 0: no
 * @method void setIsMasterSwitched(MonitorData $IsMasterSwitched) Set Whether master/slave switch occurred. 1: yes, 0: no
 * @method MonitorData getSlaveDelay() Obtain Master/slave delay
 * @method void setSlaveDelay(MonitorData $SlaveDelay) Set Master/slave delay
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBPerformanceResponse extends AbstractModel
{
    /**
     * @var MonitorData Number of slow queries
     */
    public $LongQuery;

    /**
     * @var MonitorData Number of SELECT operations
     */
    public $SelectTotal;

    /**
     * @var MonitorData Number of UPDATE operations
     */
    public $UpdateTotal;

    /**
     * @var MonitorData Number of INSERT operations
     */
    public $InsertTotal;

    /**
     * @var MonitorData Number of DELETE operations
     */
    public $DeleteTotal;

    /**
     * @var MonitorData Cache hit rate
     */
    public $MemHitRate;

    /**
     * @var MonitorData Number of disk IOs per second
     */
    public $DiskIops;

    /**
     * @var MonitorData Number of active connections
     */
    public $ConnActive;

    /**
     * @var MonitorData Whether master/slave switch occurred. 1: yes, 0: no
     */
    public $IsMasterSwitched;

    /**
     * @var MonitorData Master/slave delay
     */
    public $SlaveDelay;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param MonitorData $LongQuery Number of slow queries
     * @param MonitorData $SelectTotal Number of SELECT operations
     * @param MonitorData $UpdateTotal Number of UPDATE operations
     * @param MonitorData $InsertTotal Number of INSERT operations
     * @param MonitorData $DeleteTotal Number of DELETE operations
     * @param MonitorData $MemHitRate Cache hit rate
     * @param MonitorData $DiskIops Number of disk IOs per second
     * @param MonitorData $ConnActive Number of active connections
     * @param MonitorData $IsMasterSwitched Whether master/slave switch occurred. 1: yes, 0: no
     * @param MonitorData $SlaveDelay Master/slave delay
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
        if (array_key_exists("LongQuery",$param) and $param["LongQuery"] !== null) {
            $this->LongQuery = new MonitorData();
            $this->LongQuery->deserialize($param["LongQuery"]);
        }

        if (array_key_exists("SelectTotal",$param) and $param["SelectTotal"] !== null) {
            $this->SelectTotal = new MonitorData();
            $this->SelectTotal->deserialize($param["SelectTotal"]);
        }

        if (array_key_exists("UpdateTotal",$param) and $param["UpdateTotal"] !== null) {
            $this->UpdateTotal = new MonitorData();
            $this->UpdateTotal->deserialize($param["UpdateTotal"]);
        }

        if (array_key_exists("InsertTotal",$param) and $param["InsertTotal"] !== null) {
            $this->InsertTotal = new MonitorData();
            $this->InsertTotal->deserialize($param["InsertTotal"]);
        }

        if (array_key_exists("DeleteTotal",$param) and $param["DeleteTotal"] !== null) {
            $this->DeleteTotal = new MonitorData();
            $this->DeleteTotal->deserialize($param["DeleteTotal"]);
        }

        if (array_key_exists("MemHitRate",$param) and $param["MemHitRate"] !== null) {
            $this->MemHitRate = new MonitorData();
            $this->MemHitRate->deserialize($param["MemHitRate"]);
        }

        if (array_key_exists("DiskIops",$param) and $param["DiskIops"] !== null) {
            $this->DiskIops = new MonitorData();
            $this->DiskIops->deserialize($param["DiskIops"]);
        }

        if (array_key_exists("ConnActive",$param) and $param["ConnActive"] !== null) {
            $this->ConnActive = new MonitorData();
            $this->ConnActive->deserialize($param["ConnActive"]);
        }

        if (array_key_exists("IsMasterSwitched",$param) and $param["IsMasterSwitched"] !== null) {
            $this->IsMasterSwitched = new MonitorData();
            $this->IsMasterSwitched->deserialize($param["IsMasterSwitched"]);
        }

        if (array_key_exists("SlaveDelay",$param) and $param["SlaveDelay"] !== null) {
            $this->SlaveDelay = new MonitorData();
            $this->SlaveDelay->deserialize($param["SlaveDelay"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
