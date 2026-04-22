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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureMNGPreview request structure.
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method integer getActionType() Obtain <p>1 Set 2 Cancel</p>
 * @method void setActionType(integer $ActionType) Set <p>1 Set 2 Cancel</p>
 * @method integer getMNPVersionId() Obtain <p>Mini game version ID</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini game version ID</p>
 * @method string getPlatformId() Obtain <p>Platform ID</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID</p>
 * @method string getPreviewEntrancePath() Obtain <p>Preview path</p>
 * @method void setPreviewEntrancePath(string $PreviewEntrancePath) Set <p>Preview path</p>
 */
class ConfigureMNGPreviewRequest extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var integer <p>1 Set 2 Cancel</p>
     */
    public $ActionType;

    /**
     * @var integer <p>Mini game version ID</p>
     */
    public $MNPVersionId;

    /**
     * @var string <p>Platform ID</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Preview path</p>
     */
    public $PreviewEntrancePath;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param integer $ActionType <p>1 Set 2 Cancel</p>
     * @param integer $MNPVersionId <p>Mini game version ID</p>
     * @param string $PlatformId <p>Platform ID</p>
     * @param string $PreviewEntrancePath <p>Preview path</p>
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("PreviewEntrancePath",$param) and $param["PreviewEntrancePath"] !== null) {
            $this->PreviewEntrancePath = $param["PreviewEntrancePath"];
        }
    }
}
