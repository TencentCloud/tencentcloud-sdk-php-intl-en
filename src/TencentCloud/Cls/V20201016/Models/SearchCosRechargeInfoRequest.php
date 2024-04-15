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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchCosRechargeInfo request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getName() Obtain Delivery Task Name
 * @method void setName(string $Name) Set Delivery Task Name
 * @method string getBucket() Obtain COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
 * @method void setBucket(string $Bucket) Set COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
 * @method string getBucketRegion() Obtain The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method void setBucketRegion(string $BucketRegion) Set The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
 * @method string getPrefix() Obtain The prefix of the folder where COS files are located
 * @method void setPrefix(string $Prefix) Set The prefix of the folder where COS files are located
 * @method string getCompress() Obtain Compression mode: "", "gzip", "lzop", and "snappy". The default mode is "".
 * @method void setCompress(string $Compress) Set Compression mode: "", "gzip", "lzop", and "snappy". The default mode is "".
 */
class SearchCosRechargeInfoRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Delivery Task Name
     */
    public $Name;

    /**
     * @var string COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
     */
    public $Bucket;

    /**
     * @var string The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     */
    public $BucketRegion;

    /**
     * @var string The prefix of the folder where COS files are located
     */
    public $Prefix;

    /**
     * @var string Compression mode: "", "gzip", "lzop", and "snappy". The default mode is "".
     */
    public $Compress;

    /**
     * @param string $TopicId Log topic ID
     * @param string $LogsetId Logset ID
     * @param string $Name Delivery Task Name
     * @param string $Bucket COS bucket, see the supported [bucket naming conventions](https://intl.cloud.tencent.com/document/product/436/13312?from_cn_redirect=1).
     * @param string $BucketRegion The region where the COS bucket is located, see the supported [region list](https://intl.cloud.tencent.com/document/product/436/6224?from_cn_redirect=1).
     * @param string $Prefix The prefix of the folder where COS files are located
     * @param string $Compress Compression mode: "", "gzip", "lzop", and "snappy". The default mode is "".
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }
    }
}
