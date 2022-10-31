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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 *  Data storage information
 *
 * @method string getType() Obtain Type. Values:
`URL`: Resource link
`COS`: Tencent Cloud COS
 * @method void setType(string $Type) Set Type. Values:
`URL`: Resource link
`COS`: Tencent Cloud COS
 * @method string getUrl() Obtain Resource link
 * @method void setUrl(string $Url) Set Resource link
 * @method BucketInfo getBucketInfo() Obtain Tencent Cloud bucket information
 * @method void setBucketInfo(BucketInfo $BucketInfo) Set Tencent Cloud bucket information
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string Type. Values:
`URL`: Resource link
`COS`: Tencent Cloud COS
     */
    public $Type;

    /**
     * @var string Resource link
     */
    public $Url;

    /**
     * @var BucketInfo Tencent Cloud bucket information
     */
    public $BucketInfo;

    /**
     * @param string $Type Type. Values:
`URL`: Resource link
`COS`: Tencent Cloud COS
     * @param string $Url Resource link
     * @param BucketInfo $BucketInfo Tencent Cloud bucket information
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new BucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }
    }
}
