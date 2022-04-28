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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterLevelChangeRecords request structure.
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getStartAt() Obtain Start time
 * @method void setStartAt(string $StartAt) Set Start time
 * @method string getEndAt() Obtain End time
 * @method void setEndAt(string $EndAt) Set End time
 * @method integer getOffset() Obtain Offset. Default value: `0`
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: `20`
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: `20`
 */
class DescribeClusterLevelChangeRecordsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Start time
     */
    public $StartAt;

    /**
     * @var string End time
     */
    public $EndAt;

    /**
     * @var integer Offset. Default value: `0`
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: `20`
     */
    public $Limit;

    /**
     * @param string $ClusterID Cluster ID
     * @param string $StartAt Start time
     * @param string $EndAt End time
     * @param integer $Offset Offset. Default value: `0`
     * @param integer $Limit Maximum number of output entries. Default value: `20`
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
