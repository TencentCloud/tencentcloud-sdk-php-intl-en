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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Obtain response of unsatisfied reply context.
 *
 * @method string getRecordBizId() Obtain Message record ID.
 * @method void setRecordBizId(string $RecordBizId) Set Message record ID.
 * @method boolean getIsVisitor() Obtain Whether it is a user.
 * @method void setIsVisitor(boolean $IsVisitor) Set Whether it is a user.
 * @method string getNickName() Obtain Nickname.
 * @method void setNickName(string $NickName) Set Nickname.
 * @method string getAvatar() Obtain Avatar.
 * @method void setAvatar(string $Avatar) Set Avatar.
 * @method string getContent() Obtain Message content.
 * @method void setContent(string $Content) Set Message content.
 * @method array getFileInfos() Obtain Document information.
 * @method void setFileInfos(array $FileInfos) Set Document information.
 * @method integer getReplyMethod() Obtain Response method, 15: clarification confirmation response.
 * @method void setReplyMethod(integer $ReplyMethod) Set Response method, 15: clarification confirmation response.
 */
class Context extends AbstractModel
{
    /**
     * @var string Message record ID.
     */
    public $RecordBizId;

    /**
     * @var boolean Whether it is a user.
     */
    public $IsVisitor;

    /**
     * @var string Nickname.
     */
    public $NickName;

    /**
     * @var string Avatar.
     */
    public $Avatar;

    /**
     * @var string Message content.
     */
    public $Content;

    /**
     * @var array Document information.
     */
    public $FileInfos;

    /**
     * @var integer Response method, 15: clarification confirmation response.
     */
    public $ReplyMethod;

    /**
     * @param string $RecordBizId Message record ID.
     * @param boolean $IsVisitor Whether it is a user.
     * @param string $NickName Nickname.
     * @param string $Avatar Avatar.
     * @param string $Content Message content.
     * @param array $FileInfos Document information.
     * @param integer $ReplyMethod Response method, 15: clarification confirmation response.
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
        if (array_key_exists("RecordBizId",$param) and $param["RecordBizId"] !== null) {
            $this->RecordBizId = $param["RecordBizId"];
        }

        if (array_key_exists("IsVisitor",$param) and $param["IsVisitor"] !== null) {
            $this->IsVisitor = $param["IsVisitor"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new MsgFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }
    }
}
