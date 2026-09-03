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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAIWorkbenchArtifactDownloadURL request structure.
 *
 * @method string getSessionId() Obtain <p>Session ID.</p>
 * @method void setSessionId(string $SessionId) Set <p>Session ID.</p>
 * @method string getArtifactId() Obtain <p>Artifact ID</p>
 * @method void setArtifactId(string $ArtifactId) Set <p>Artifact ID</p>
 */
class GetAIWorkbenchArtifactDownloadURLRequest extends AbstractModel
{
    /**
     * @var string <p>Session ID.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Artifact ID</p>
     */
    public $ArtifactId;

    /**
     * @param string $SessionId <p>Session ID.</p>
     * @param string $ArtifactId <p>Artifact ID</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }
    }
}
