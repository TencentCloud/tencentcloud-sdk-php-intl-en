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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Release document details.
 *
 * @method string getFileName() Obtain File name.
 * @method void setFileName(string $FileName) Set File name.
 * @method string getFileType() Obtain File type.
 * @method void setFileType(string $FileType) Set File type.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getAction() Obtain Status.
 * @method void setAction(integer $Action) Set Status.
 * @method string getActionDesc() Obtain Status description.
 * @method void setActionDesc(string $ActionDesc) Set Status description.
 * @method string getMessage() Obtain Reason for failure.
 * @method void setMessage(string $Message) Set Reason for failure.
 * @method string getDocBizId() Obtain Document business ID.
 * @method void setDocBizId(string $DocBizId) Set Document business ID.
 */
class ReleaseDoc extends AbstractModel
{
    /**
     * @var string File name.
     */
    public $FileName;

    /**
     * @var string File type.
     */
    public $FileType;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Status.
     */
    public $Action;

    /**
     * @var string Status description.
     */
    public $ActionDesc;

    /**
     * @var string Reason for failure.
     */
    public $Message;

    /**
     * @var string Document business ID.
     */
    public $DocBizId;

    /**
     * @param string $FileName File name.
     * @param string $FileType File type.
     * @param string $UpdateTime Update time.
     * @param integer $Action Status.
     * @param string $ActionDesc Status description.
     * @param string $Message Reason for failure.
     * @param string $DocBizId Document business ID.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }
    }
}
