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
 * DescribeCosObjectScanTask request structure.
 *
 * @method integer getTaskType() Obtain <p>1: sensitive data identification 2: malicious file scanning</p>
 * @method void setTaskType(integer $TaskType) Set <p>1: sensitive data identification 2: malicious file scanning</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getBucketSet() Obtain <p>Bucket list</p>
 * @method void setBucketSet(array $BucketSet) Set <p>Bucket list</p>
 */
class DescribeCosObjectScanTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>1: sensitive data identification 2: malicious file scanning</p>
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
     * @param integer $TaskType <p>1: sensitive data identification 2: malicious file scanning</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $BucketSet <p>Bucket list</p>
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
    }
}
