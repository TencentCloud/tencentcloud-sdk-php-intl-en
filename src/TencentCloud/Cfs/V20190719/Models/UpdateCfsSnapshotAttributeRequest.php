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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsSnapshotAttribute request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
 * @method string getSnapshotName() Obtain File system snapshot name, must fill in either this or AliveDays. snapshot name supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method void setSnapshotName(string $SnapshotName) Set File system snapshot name, must fill in either this or AliveDays. snapshot name supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method integer getAliveDays() Obtain File system snapshot retention days. either this or SnapshotName must be specified. if the original setting has permanent retention attribute, it is not allowed to be modified to short-term validity.
 * @method void setAliveDays(integer $AliveDays) Set File system snapshot retention days. either this or SnapshotName must be specified. if the original setting has permanent retention attribute, it is not allowed to be modified to short-term validity.
 */
class UpdateCfsSnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
     */
    public $SnapshotId;

    /**
     * @var string File system snapshot name, must fill in either this or AliveDays. snapshot name supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     */
    public $SnapshotName;

    /**
     * @var integer File system snapshot retention days. either this or SnapshotName must be specified. if the original setting has permanent retention attribute, it is not allowed to be modified to short-term validity.
     */
    public $AliveDays;

    /**
     * @param string $SnapshotId Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
     * @param string $SnapshotName File system snapshot name, must fill in either this or AliveDays. snapshot name supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     * @param integer $AliveDays File system snapshot retention days. either this or SnapshotName must be specified. if the original setting has permanent retention attribute, it is not allowed to be modified to short-term validity.
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }
    }
}
