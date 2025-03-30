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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsrHotwords response structure.
 *
 * @method string getHotwordsId() Obtain ID of the hotword lexicon to be queried.
 * @method void setHotwordsId(string $HotwordsId) Set ID of the hotword lexicon to be queried.
 * @method integer getStatus() Obtain Current status of the hotword lexicon corresponding to the ID. The value 0 indicates that no template is bound to this hotword lexicon when the query is performed and that the hotword lexicon can be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Current status of the hotword lexicon corresponding to the ID. The value 0 indicates that no template is bound to this hotword lexicon when the query is performed and that the hotword lexicon can be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getType() Obtain The value is 0 for a temporary hotword lexicon, and the string provided during creation is returned.
The value is 1 for a file-based hotword lexicon, and the content of the file uploaded during creation is returned.


Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(integer $Type) Set The value is 0 for a temporary hotword lexicon, and the string provided during creation is returned.
The value is 1 for a file-based hotword lexicon, and the content of the file uploaded during creation is returned.


Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileName() Obtain Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileName(string $FileName) Set Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getHotWords() Obtain List of hotwords returned for the query.
 * @method void setHotWords(array $HotWords) Set List of hotwords returned for the query.
 * @method string getContent() Obtain Hotword text, which depends on the value of Type.
If the value of Type is 0, the hotword string is returned.
If the value of Type is 1, the base64-encoded content of the hotword file is returned.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setContent(string $Content) Set Hotword text, which depends on the value of Type.
If the value of Type is 0, the hotword string is returned.
If the value of Type is 1, the base64-encoded content of the hotword file is returned.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getWordCount() Obtain Number of words contained in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWordCount(integer $WordCount) Set Number of words contained in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Modification time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAsrHotwordsResponse extends AbstractModel
{
    /**
     * @var string ID of the hotword lexicon to be queried.
     */
    public $HotwordsId;

    /**
     * @var integer Current status of the hotword lexicon corresponding to the ID. The value 0 indicates that no template is bound to this hotword lexicon when the query is performed and that the hotword lexicon can be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer The value is 0 for a temporary hotword lexicon, and the string provided during creation is returned.
The value is 1 for a file-based hotword lexicon, and the content of the file uploaded during creation is returned.


Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileName;

    /**
     * @var array List of hotwords returned for the query.
     */
    public $HotWords;

    /**
     * @var string Hotword text, which depends on the value of Type.
If the value of Type is 0, the hotword string is returned.
If the value of Type is 1, the base64-encoded content of the hotword file is returned.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Content;

    /**
     * @var integer Number of words contained in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WordCount;

    /**
     * @var integer Paging offset. Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Limit;

    /**
     * @var string Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Modification time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $HotwordsId ID of the hotword lexicon to be queried.
     * @param integer $Status Current status of the hotword lexicon corresponding to the ID. The value 0 indicates that no template is bound to this hotword lexicon when the query is performed and that the hotword lexicon can be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Type The value is 0 for a temporary hotword lexicon, and the string provided during creation is returned.
The value is 1 for a file-based hotword lexicon, and the content of the file uploaded during creation is returned.


Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileName Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $HotWords List of hotwords returned for the query.
     * @param string $Content Hotword text, which depends on the value of Type.
If the value of Type is 0, the hotword string is returned.
If the value of Type is 1, the base64-encoded content of the hotword file is returned.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $WordCount Number of words contained in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Offset Paging offset. Default value: 0.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Modification time of the hotword lexicon in ISO datetime format (UTC time). For example, "2006-01-02T15:04:05Z".
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("HotWords",$param) and $param["HotWords"] !== null) {
            $this->HotWords = [];
            foreach ($param["HotWords"] as $key => $value){
                $obj = new AsrHotwordsSetItem();
                $obj->deserialize($value);
                array_push($this->HotWords, $obj);
            }
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
            $this->WordCount = $param["WordCount"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
