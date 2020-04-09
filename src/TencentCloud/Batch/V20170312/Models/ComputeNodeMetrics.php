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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compute node statistical metrics
 *
 * @method integer getSubmittedCount() Obtain Number of compute nodes that have been submitted
 * @method void setSubmittedCount(integer $SubmittedCount) Set Number of compute nodes that have been submitted
 * @method integer getCreatingCount() Obtain Number of compute nodes that are being created
 * @method void setCreatingCount(integer $CreatingCount) Set Number of compute nodes that are being created
 * @method integer getCreationFailedCount() Obtain Number of compute nodes that failed to be created
 * @method void setCreationFailedCount(integer $CreationFailedCount) Set Number of compute nodes that failed to be created
 * @method integer getCreatedCount() Obtain Number of compute nodes that have been created
 * @method void setCreatedCount(integer $CreatedCount) Set Number of compute nodes that have been created
 * @method integer getRunningCount() Obtain Number of running compute nodes
 * @method void setRunningCount(integer $RunningCount) Set Number of running compute nodes
 * @method integer getDeletingCount() Obtain Number of compute nodes that are being terminated
 * @method void setDeletingCount(integer $DeletingCount) Set Number of compute nodes that are being terminated
 * @method integer getAbnormalCount() Obtain Number of exceptional compute nodes
 * @method void setAbnormalCount(integer $AbnormalCount) Set Number of exceptional compute nodes
 */
class ComputeNodeMetrics extends AbstractModel
{
    /**
     * @var integer Number of compute nodes that have been submitted
     */
    public $SubmittedCount;

    /**
     * @var integer Number of compute nodes that are being created
     */
    public $CreatingCount;

    /**
     * @var integer Number of compute nodes that failed to be created
     */
    public $CreationFailedCount;

    /**
     * @var integer Number of compute nodes that have been created
     */
    public $CreatedCount;

    /**
     * @var integer Number of running compute nodes
     */
    public $RunningCount;

    /**
     * @var integer Number of compute nodes that are being terminated
     */
    public $DeletingCount;

    /**
     * @var integer Number of exceptional compute nodes
     */
    public $AbnormalCount;

    /**
     * @param integer $SubmittedCount Number of compute nodes that have been submitted
     * @param integer $CreatingCount Number of compute nodes that are being created
     * @param integer $CreationFailedCount Number of compute nodes that failed to be created
     * @param integer $CreatedCount Number of compute nodes that have been created
     * @param integer $RunningCount Number of running compute nodes
     * @param integer $DeletingCount Number of compute nodes that are being terminated
     * @param integer $AbnormalCount Number of exceptional compute nodes
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
        if (array_key_exists("SubmittedCount",$param) and $param["SubmittedCount"] !== null) {
            $this->SubmittedCount = $param["SubmittedCount"];
        }

        if (array_key_exists("CreatingCount",$param) and $param["CreatingCount"] !== null) {
            $this->CreatingCount = $param["CreatingCount"];
        }

        if (array_key_exists("CreationFailedCount",$param) and $param["CreationFailedCount"] !== null) {
            $this->CreationFailedCount = $param["CreationFailedCount"];
        }

        if (array_key_exists("CreatedCount",$param) and $param["CreatedCount"] !== null) {
            $this->CreatedCount = $param["CreatedCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("DeletingCount",$param) and $param["DeletingCount"] !== null) {
            $this->DeletingCount = $param["DeletingCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }
    }
}
