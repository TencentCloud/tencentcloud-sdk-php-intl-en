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
 * @method string getType() Obtain Type of the media processing output object storage location. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, suitable for AWS tasks only and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
 * @method void setType(string $Type) Set Type of the media processing output object storage location. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, suitable for AWS tasks only and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
 * @method CosOutputStorage getCosOutputStorage() Obtain 
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set 
 * @method S3OutputStorage getS3OutputStorage() Obtain 
 * @method void setS3OutputStorage(S3OutputStorage $S3OutputStorage) Set 
 * @method VODOutputStorage getVODOutputStorage() Obtain 
 * @method void setVODOutputStorage(VODOutputStorage $VODOutputStorage) Set 
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string Type of the media processing output object storage location. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, suitable for AWS tasks only and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
     */
    public $Type;

    /**
     * @var CosOutputStorage 
     */
    public $CosOutputStorage;

    /**
     * @var S3OutputStorage 
     */
    public $S3OutputStorage;

    /**
     * @var VODOutputStorage 
     */
    public $VODOutputStorage;

    /**
     * @param string $Type Type of the media processing output object storage location. Supported values:
<li>COS: COS storage</li>
<li>AWS-S3: AWS storage, suitable for AWS tasks only and requires the same region</li>
<li> VOD: VOD Pro Edition </li>
     * @param CosOutputStorage $CosOutputStorage 
     * @param S3OutputStorage $S3OutputStorage 
     * @param VODOutputStorage $VODOutputStorage 
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
