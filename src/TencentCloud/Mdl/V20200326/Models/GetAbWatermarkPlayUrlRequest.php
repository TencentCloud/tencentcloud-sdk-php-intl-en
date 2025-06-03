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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAbWatermarkPlayUrl request structure.
 *
 * @method integer getUuid() Obtain Client UUID, 32-bit unsigned integer.
 * @method void setUuid(integer $Uuid) Set Client UUID, 32-bit unsigned integer.
 * @method string getStreamPackageChannelId() Obtain Channel ID of Stream Package.
 * @method void setStreamPackageChannelId(string $StreamPackageChannelId) Set Channel ID of Stream Package.
 * @method string getUrl() Obtain Original play URL.
 * @method void setUrl(string $Url) Set Original play URL.
 */
class GetAbWatermarkPlayUrlRequest extends AbstractModel
{
    /**
     * @var integer Client UUID, 32-bit unsigned integer.
     */
    public $Uuid;

    /**
     * @var string Channel ID of Stream Package.
     */
    public $StreamPackageChannelId;

    /**
     * @var string Original play URL.
     */
    public $Url;

    /**
     * @param integer $Uuid Client UUID, 32-bit unsigned integer.
     * @param string $StreamPackageChannelId Channel ID of Stream Package.
     * @param string $Url Original play URL.
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("StreamPackageChannelId",$param) and $param["StreamPackageChannelId"] !== null) {
            $this->StreamPackageChannelId = $param["StreamPackageChannelId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
