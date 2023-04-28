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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDosageCosDetailByDate request structure.
 *
 * @method string getStartDate() Obtain The start date of the usage query, such as `2020-09-01`.
 * @method void setStartDate(string $StartDate) Set The start date of the usage query, such as `2020-09-01`.
 * @method string getEndDate() Obtain The end date of the usage query (end date must be in the same month as the start date), such as `2020-09-30`.
 * @method void setEndDate(string $EndDate) Set The end date of the usage query (end date must be in the same month as the start date), such as `2020-09-30`.
 * @method string getBucketName() Obtain Bucket name. You can use `Get Service` to query the list of all buckets under a requester account. For details, see [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291).
 * @method void setBucketName(string $BucketName) Set Bucket name. You can use `Get Service` to query the list of all buckets under a requester account. For details, see [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291).
 */
class DescribeDosageCosDetailByDateRequest extends AbstractModel
{
    /**
     * @var string The start date of the usage query, such as `2020-09-01`.
     */
    public $StartDate;

    /**
     * @var string The end date of the usage query (end date must be in the same month as the start date), such as `2020-09-30`.
     */
    public $EndDate;

    /**
     * @var string Bucket name. You can use `Get Service` to query the list of all buckets under a requester account. For details, see [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291).
     */
    public $BucketName;

    /**
     * @param string $StartDate The start date of the usage query, such as `2020-09-01`.
     * @param string $EndDate The end date of the usage query (end date must be in the same month as the start date), such as `2020-09-30`.
     * @param string $BucketName Bucket name. You can use `Get Service` to query the list of all buckets under a requester account. For details, see [GET Service (List Buckets)](https://www.tencentcloud.com/document/product/436/8291).
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }
    }
}
