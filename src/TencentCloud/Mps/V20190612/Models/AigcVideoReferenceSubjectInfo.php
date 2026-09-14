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
 * Reference entity information.
For the Vidu model:
Id -> server_id. Principal ID obtained through the principal creation API.
Principal ID, subsequently used in the format of @Principal ID.

For the Kling model:
element id, obtained through the principal creation API.
 *
 * @method string getId() Obtain <p>ID of the reference subject.</p>
 * @method void setId(string $Id) Set <p>ID of the reference subject.</p>
 * @method string getName() Obtain <p>Subject name.</p>
 * @method void setName(string $Name) Set <p>Subject name.</p>
 * @method string getVoiceId() Obtain <p>Main voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Main voice ID.</p>
 * @method array getImageUrls() Obtain <p>Main image list.</p>
 * @method void setImageUrls(array $ImageUrls) Set <p>Main image list.</p>
 * @method array getVideoUrls() Obtain <p>Main video list.</p>
 * @method void setVideoUrls(array $VideoUrls) Set <p>Main video list.</p>
 */
class AigcVideoReferenceSubjectInfo extends AbstractModel
{
    /**
     * @var string <p>ID of the reference subject.</p>
     */
    public $Id;

    /**
     * @var string <p>Subject name.</p>
     */
    public $Name;

    /**
     * @var string <p>Main voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var array <p>Main image list.</p>
     */
    public $ImageUrls;

    /**
     * @var array <p>Main video list.</p>
     */
    public $VideoUrls;

    /**
     * @param string $Id <p>ID of the reference subject.</p>
     * @param string $Name <p>Subject name.</p>
     * @param string $VoiceId <p>Main voice ID.</p>
     * @param array $ImageUrls <p>Main image list.</p>
     * @param array $VideoUrls <p>Main video list.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("VideoUrls",$param) and $param["VideoUrls"] !== null) {
            $this->VideoUrls = $param["VideoUrls"];
        }
    }
}
