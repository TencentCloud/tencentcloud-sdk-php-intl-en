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
 * CreateCosObjectScanTask request structure.
 *
 * @method integer getTaskType() Obtain <p>1: Sensitive data identification 2: Malicious file scanning 3: Batch scan sensitive data</p>
 * @method void setTaskType(integer $TaskType) Set <p>1: Sensitive data identification 2: Malicious file scanning 3: Batch scan sensitive data</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getBucketSet() Obtain <p>Bucket list</p>
 * @method void setBucketSet(array $BucketSet) Set <p>Bucket list</p>
 * @method string getTaskArgs() Obtain <p>Task parameter</p>
 * @method void setTaskArgs(string $TaskArgs) Set <p>Task parameter</p>
 * @method boolean getIsScanAll() Obtain <p>Whether to scan all</p>
 * @method void setIsScanAll(boolean $IsScanAll) Set <p>Whether to scan all</p>
 * @method array getDeleteBucketSet() Obtain <p>Buckets to remove during scanning</p>
 * @method void setDeleteBucketSet(array $DeleteBucketSet) Set <p>Buckets to remove during scanning</p>
 */
class CreateCosObjectScanTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>1: Sensitive data identification 2: Malicious file scanning 3: Batch scan sensitive data</p>
     */
    public $TaskType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Bucket list</p>
     */
    public $BucketSet;

    /**
     * @var string <p>Task parameter</p>
     */
    public $TaskArgs;

    /**
     * @var boolean <p>Whether to scan all</p>
     */
    public $IsScanAll;

    /**
     * @var array <p>Buckets to remove during scanning</p>
     */
    public $DeleteBucketSet;

    /**
     * @param integer $TaskType <p>1: Sensitive data identification 2: Malicious file scanning 3: Batch scan sensitive data</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $BucketSet <p>Bucket list</p>
     * @param string $TaskArgs <p>Task parameter</p>
     * @param boolean $IsScanAll <p>Whether to scan all</p>
     * @param array $DeleteBucketSet <p>Buckets to remove during scanning</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("BucketSet",$param) and $param["BucketSet"] !== null) {
            $this->BucketSet = $param["BucketSet"];
        }

        if (array_key_exists("TaskArgs",$param) and $param["TaskArgs"] !== null) {
            $this->TaskArgs = $param["TaskArgs"];
        }

        if (array_key_exists("IsScanAll",$param) and $param["IsScanAll"] !== null) {
            $this->IsScanAll = $param["IsScanAll"];
        }

        if (array_key_exists("DeleteBucketSet",$param) and $param["DeleteBucketSet"] !== null) {
            $this->DeleteBucketSet = $param["DeleteBucketSet"];
        }
    }
}
