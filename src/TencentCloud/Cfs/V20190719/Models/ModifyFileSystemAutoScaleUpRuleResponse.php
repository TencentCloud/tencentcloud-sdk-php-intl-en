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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFileSystemAutoScaleUpRule response structure.
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getStatus() Obtain Rule status. Valid values: `0` (disabled) and `1` (enabled).
 * @method void setStatus(integer $Status) Set Rule status. Valid values: `0` (disabled) and `1` (enabled).
 * @method integer getScaleUpThreshold() Obtain Threshold for triggering scaling. Value range: 10-90
 * @method void setScaleUpThreshold(integer $ScaleUpThreshold) Set Threshold for triggering scaling. Value range: 10-90
 * @method integer getTargetThreshold() Obtain Target threshold after scaling. Value range: 10-90
 * @method void setTargetThreshold(integer $TargetThreshold) Set Target threshold after scaling. Value range: 10-90
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyFileSystemAutoScaleUpRuleResponse extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var integer Rule status. Valid values: `0` (disabled) and `1` (enabled).
     */
    public $Status;

    /**
     * @var integer Threshold for triggering scaling. Value range: 10-90
     */
    public $ScaleUpThreshold;

    /**
     * @var integer Target threshold after scaling. Value range: 10-90
     */
    public $TargetThreshold;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $FileSystemId File system ID
     * @param integer $Status Rule status. Valid values: `0` (disabled) and `1` (enabled).
     * @param integer $ScaleUpThreshold Threshold for triggering scaling. Value range: 10-90
     * @param integer $TargetThreshold Target threshold after scaling. Value range: 10-90
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScaleUpThreshold",$param) and $param["ScaleUpThreshold"] !== null) {
            $this->ScaleUpThreshold = $param["ScaleUpThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
