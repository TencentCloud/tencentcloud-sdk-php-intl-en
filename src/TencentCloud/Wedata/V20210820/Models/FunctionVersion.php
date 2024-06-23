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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function Submission Version Information
 *
 * @method string getTag() Obtain Version number: V0 V1 V2
 * @method void setTag(string $Tag) Set Version number: V0 V1 V2
 * @method string getUserId() Obtain Submitter ID
 * @method void setUserId(string $UserId) Set Submitter ID
 * @method string getType() Obtain Change Type: ADD, MODIFY
 * @method void setType(string $Type) Set Change Type: ADD, MODIFY
 * @method string getComment() Obtain Remarks
 * @method void setComment(string $Comment) Set Remarks
 * @method string getTimestamp() Obtain Submission Time: UTC Seconds
 * @method void setTimestamp(string $Timestamp) Set Submission Time: UTC Seconds
 * @method string getUserName() Obtain Submitter Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserName(string $UserName) Set Submitter Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getContent() Obtain Version Information: json string format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setContent(string $Content) Set Version Information: json string format
Note: This field may return null, indicating that no valid value can be obtained.
 */
class FunctionVersion extends AbstractModel
{
    /**
     * @var string Version number: V0 V1 V2
     */
    public $Tag;

    /**
     * @var string Submitter ID
     */
    public $UserId;

    /**
     * @var string Change Type: ADD, MODIFY
     */
    public $Type;

    /**
     * @var string Remarks
     */
    public $Comment;

    /**
     * @var string Submission Time: UTC Seconds
     */
    public $Timestamp;

    /**
     * @var string Submitter Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserName;

    /**
     * @var string Version Information: json string format
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Content;

    /**
     * @param string $Tag Version number: V0 V1 V2
     * @param string $UserId Submitter ID
     * @param string $Type Change Type: ADD, MODIFY
     * @param string $Comment Remarks
     * @param string $Timestamp Submission Time: UTC Seconds
     * @param string $UserName Submitter Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Content Version Information: json string format
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
