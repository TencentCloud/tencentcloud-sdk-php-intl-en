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
 * DescribeBucketList request structure.
 *
 * @method string getSrcService() Obtain Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
 * @method void setSrcService(string $SrcService) Set Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
 * @method string getSrcSecretId() Obtain SecretId of the data source account

 * @method void setSrcSecretId(string $SrcSecretId) Set SecretId of the data source account

 * @method string getSrcSecretKey() Obtain SecretKey of the data source account
 * @method void setSrcSecretKey(string $SrcSecretKey) Set SecretKey of the data source account
 */
class DescribeBucketListRequest extends AbstractModel
{
    /**
     * @var string Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
     */
    public $SrcService;

    /**
     * @var string SecretId of the data source account

     */
    public $SrcSecretId;

    /**
     * @var string SecretKey of the data source account
     */
    public $SrcSecretKey;

    /**
     * @param string $SrcService Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
     * @param string $SrcSecretId SecretId of the data source account

     * @param string $SrcSecretKey SecretKey of the data source account
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
        if (array_key_exists("SrcService",$param) and $param["SrcService"] !== null) {
            $this->SrcService = $param["SrcService"];
        }

        if (array_key_exists("SrcSecretId",$param) and $param["SrcSecretId"] !== null) {
            $this->SrcSecretId = $param["SrcSecretId"];
        }

        if (array_key_exists("SrcSecretKey",$param) and $param["SrcSecretKey"] !== null) {
            $this->SrcSecretKey = $param["SrcSecretKey"];
        }
    }
}
