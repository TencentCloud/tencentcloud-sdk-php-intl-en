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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The input of a moderation task.
 *
 * @method string getFileId() Obtain The ID of the media file.
 * @method void setFileId(string $FileId) Set The ID of the media file.
 * @method integer getDefinition() Obtain The moderation template ID.
 * @method void setDefinition(integer $Definition) Set The moderation template ID.
 * @method array getReviewContents() Obtain The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
 * @method void setReviewContents(array $ReviewContents) Set The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
 */
class ReviewAudioVideoTaskInput extends AbstractModel
{
    /**
     * @var string The ID of the media file.
     */
    public $FileId;

    /**
     * @var integer The moderation template ID.
     */
    public $Definition;

    /**
     * @var array The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
     */
    public $ReviewContents;

    /**
     * @param string $FileId The ID of the media file.
     * @param integer $Definition The moderation template ID.
     * @param array $ReviewContents The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ReviewContents",$param) and $param["ReviewContents"] !== null) {
            $this->ReviewContents = $param["ReviewContents"];
        }
    }
}
