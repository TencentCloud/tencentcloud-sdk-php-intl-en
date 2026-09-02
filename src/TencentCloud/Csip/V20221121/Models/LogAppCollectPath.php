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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection path of application logs.
 *
 * @method integer getId() Obtain <p>Configuration ID.</p>
 * @method void setId(integer $Id) Set <p>Configuration ID.</p>
 * @method string getPath() Obtain <p>Collection path.</p>
 * @method void setPath(string $Path) Set <p>Collection path.</p>
 * @method string getLogTag() Obtain <p>Log tag.</p>
 * @method void setLogTag(string $LogTag) Set <p>Log tag.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getModifyTime() Obtain <p>Modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Modification time.</p>
 */
class LogAppCollectPath extends AbstractModel
{
    /**
     * @var integer <p>Configuration ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Collection path.</p>
     */
    public $Path;

    /**
     * @var string <p>Log tag.</p>
     */
    public $LogTag;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Modification time.</p>
     */
    public $ModifyTime;

    /**
     * @param integer $Id <p>Configuration ID.</p>
     * @param string $Path <p>Collection path.</p>
     * @param string $LogTag <p>Log tag.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ModifyTime <p>Modification time.</p>
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LogTag",$param) and $param["LogTag"] !== null) {
            $this->LogTag = $param["LogTag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
