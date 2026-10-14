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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media processing output object information.
 *
 * @method string getType() Obtain Type of the storage location for MPS output objects. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, only suitable for AWS tasks and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
 * @method void setType(string $Type) Set Type of the storage location for MPS output objects. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, only suitable for AWS tasks and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
 * @method CosOutputStorage getCosOutputStorage() Obtain Required when `Type` is `COS`. It refers to the COS output location for media processing.
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set Required when `Type` is `COS`. It refers to the COS output location for media processing.
 * @method S3OutputStorage getS3OutputStorage() Obtain Valid when Type is AWS-S3. Required. Indicates the AWS S3 output location for media processing.
 * @method void setS3OutputStorage(S3OutputStorage $S3OutputStorage) Set Valid when Type is AWS-S3. Required. Indicates the AWS S3 output location for media processing.
 * @method VODOutputStorage getVODOutputStorage() Obtain Valid when Type is VOD. This item is required and indicates the output location of MPS VOD Pro Edition.
 * @method void setVODOutputStorage(VODOutputStorage $VODOutputStorage) Set Valid when Type is VOD. This item is required and indicates the output location of MPS VOD Pro Edition.
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string Type of the storage location for MPS output objects. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, only suitable for AWS tasks and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
     */
    public $Type;

    /**
     * @var CosOutputStorage Required when `Type` is `COS`. It refers to the COS output location for media processing.
     */
    public $CosOutputStorage;

    /**
     * @var S3OutputStorage Valid when Type is AWS-S3. Required. Indicates the AWS S3 output location for media processing.
     */
    public $S3OutputStorage;

    /**
     * @var VODOutputStorage Valid when Type is VOD. This item is required and indicates the output location of MPS VOD Pro Edition.
     */
    public $VODOutputStorage;

    /**
     * @param string $Type Type of the storage location for MPS output objects. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, only suitable for AWS tasks and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
     * @param CosOutputStorage $CosOutputStorage Required when `Type` is `COS`. It refers to the COS output location for media processing.
     * @param S3OutputStorage $S3OutputStorage Valid when Type is AWS-S3. Required. Indicates the AWS S3 output location for media processing.
     * @param VODOutputStorage $VODOutputStorage Valid when Type is VOD. This item is required and indicates the output location of MPS VOD Pro Edition.
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

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorage();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }

        if (array_key_exists("S3OutputStorage",$param) and $param["S3OutputStorage"] !== null) {
            $this->S3OutputStorage = new S3OutputStorage();
            $this->S3OutputStorage->deserialize($param["S3OutputStorage"]);
        }

        if (array_key_exists("VODOutputStorage",$param) and $param["VODOutputStorage"] !== null) {
            $this->VODOutputStorage = new VODOutputStorage();
            $this->VODOutputStorage->deserialize($param["VODOutputStorage"]);
        }
    }
}
