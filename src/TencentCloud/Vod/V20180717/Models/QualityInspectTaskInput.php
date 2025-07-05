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
 * Input of media quality inspection task.
 *
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method integer getDefinition() Obtain Media quality inspect template ID.
 * @method void setDefinition(integer $Definition) Set Media quality inspect template ID.
 */
class QualityInspectTaskInput extends AbstractModel
{
    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var integer Media quality inspect template ID.
     */
    public $Definition;

    /**
     * @param string $FileId Media file ID.
     * @param integer $Definition Media quality inspect template ID.
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
    }
}
