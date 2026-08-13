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
 * The information of the media processing output object.
 *
 * @method string getType() Obtain Specifies the type of storage location for the media processing service output object. valid values:.
<Li>COS: cos storage.</li>.
<Li>AWS-S3: aws storage, suitable for aws tasks only and requires the same region.</li>.
<Li>VOD: video-on-demand (vod) pro edition</li>.
 * @method void setType(string $Type) Set Specifies the type of storage location for the media processing service output object. valid values:.
<Li>COS: cos storage.</li>.
<Li>AWS-S3: aws storage, suitable for aws tasks only and requires the same region.</li>.
<Li>VOD: video-on-demand (vod) pro edition</li>.
 * @method CosOutputStorage getCosOutputStorage() Obtain Valid when Type is COS. This item is required and indicates the Media Processing Service COS output location.
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set Valid when Type is COS. This item is required and indicates the Media Processing Service COS output location.
 * @method S3OutputStorage getS3OutputStorage() Obtain Valid when Type is AWS-S3. This item is required and indicates the AWS S3 output location for media processing.
 * @method void setS3OutputStorage(S3OutputStorage $S3OutputStorage) Set Valid when Type is AWS-S3. This item is required and indicates the AWS S3 output location for media processing.
 * @method VODOutputStorage getVODOutputStorage() Obtain Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition output location.
 * @method void setVODOutputStorage(VODOutputStorage $VODOutputStorage) Set Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition output location.
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string Specifies the type of storage location for the media processing service output object. valid values:.
<Li>COS: cos storage.</li>.
<Li>AWS-S3: aws storage, suitable for aws tasks only and requires the same region.</li>.
<Li>VOD: video-on-demand (vod) pro edition</li>.
     */
    public $Type;

    /**
     * @var CosOutputStorage Valid when Type is COS. This item is required and indicates the Media Processing Service COS output location.
     */
    public $CosOutputStorage;

    /**
     * @var S3OutputStorage Valid when Type is AWS-S3. This item is required and indicates the AWS S3 output location for media processing.
     */
    public $S3OutputStorage;

    /**
     * @var VODOutputStorage Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition output location.
     */
    public $VODOutputStorage;

    /**
     * @param string $Type Specifies the type of storage location for the media processing service output object. valid values:.
<Li>COS: cos storage.</li>.
<Li>AWS-S3: aws storage, suitable for aws tasks only and requires the same region.</li>.
<Li>VOD: video-on-demand (vod) pro edition</li>.
     * @param CosOutputStorage $CosOutputStorage Valid when Type is COS. This item is required and indicates the Media Processing Service COS output location.
     * @param S3OutputStorage $S3OutputStorage Valid when Type is AWS-S3. This item is required and indicates the AWS S3 output location for media processing.
     * @param VODOutputStorage $VODOutputStorage Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition output location.
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
