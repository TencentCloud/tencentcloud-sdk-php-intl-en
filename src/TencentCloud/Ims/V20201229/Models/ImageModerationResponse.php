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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration response structure.
 *
 * @method string getSuggestion() Obtain This field is used to return the operation suggestion for the `Label` tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
 * @method void setSuggestion(string $Suggestion) Set This field is used to return the operation suggestion for the `Label` tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
 * @method string getLabel() Obtain This field is used to return the **maliciousness tag with the highest priority** in the detection result (LabelResults), which represents the moderation result suggested by the model. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
 * @method void setLabel(string $Label) Set This field is used to return the **maliciousness tag with the highest priority** in the detection result (LabelResults), which represents the moderation result suggested by the model. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
 * @method string getSubLabel() Obtain This field is used to return the subtag name under the maliciousness tag with the highest priority hit by the detection result, such as *Porn-SexBehavior*. If no subtag is hit, an empty string will be returned.
 * @method void setSubLabel(string $SubLabel) Set This field is used to return the subtag name under the maliciousness tag with the highest priority hit by the detection result, such as *Porn-SexBehavior*. If no subtag is hit, an empty string will be returned.
 * @method integer getScore() Obtain Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
 * @method void setScore(integer $Score) Set Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
 * @method array getLabelResults() Obtain This field is used to return the detailed recognition result for the maliciousness tag hit by the categorization model, such as porn, advertising, or any other offensive, unsafe, or inappropriate type of content.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabelResults(array $LabelResults) Set This field is used to return the detailed recognition result for the maliciousness tag hit by the categorization model, such as porn, advertising, or any other offensive, unsafe, or inappropriate type of content.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getObjectResults() Obtain This field is used to return the detailed detection result of the object detection model, including the tag name hit by the content such as object, advertising logo, or QR code, tag score, coordinate information, scenario recognition result, and operation suggestion. For more information on the returned value, see the description of the `ObjectResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObjectResults(array $ObjectResults) Set This field is used to return the detailed detection result of the object detection model, including the tag name hit by the content such as object, advertising logo, or QR code, tag score, coordinate information, scenario recognition result, and operation suggestion. For more information on the returned value, see the description of the `ObjectResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getOcrResults() Obtain This field is used to return the detailed text OCR result, including the text coordinate information, text recognition result, and operation suggestion. For more information on the returned value, see the description of the `OcrResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOcrResults(array $OcrResults) Set This field is used to return the detailed text OCR result, including the text coordinate information, text recognition result, and operation suggestion. For more information on the returned value, see the description of the `OcrResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLibResults() Obtain This field is used to return the result of recognition based on image risk libraries (blocklist and allowlist). For more information on the returned value, see the description of the `LibResults` data structure.<br>Note: currently, **you cannot customize image risk libraries**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLibResults(array $LibResults) Set This field is used to return the result of recognition based on image risk libraries (blocklist and allowlist). For more information on the returned value, see the description of the `LibResults` data structure.<br>Note: currently, **you cannot customize image risk libraries**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataId() Obtain This field is used to return the `DataId` in the request parameters that correspond to the detected object.
 * @method void setDataId(string $DataId) Set This field is used to return the `DataId` in the request parameters that correspond to the detected object.
 * @method string getBizType() Obtain This field is used to return the `BizType` in the request parameters that correspond to the detected object.
 * @method void setBizType(string $BizType) Set This field is used to return the `BizType` in the request parameters that correspond to the detected object.
 * @method string getExtra() Obtain This field is used to return the additional information (Extra) configured based on your needs. If it is not configured, an empty value will be returned by default.<br>Note: the returned information varies by customer or `Biztype`. If you need to configure this field, submit a ticket or contact the aftersales service for assistance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExtra(string $Extra) Set This field is used to return the additional information (Extra) configured based on your needs. If it is not configured, an empty value will be returned by default.<br>Note: the returned information varies by customer or `Biztype`. If you need to configure this field, submit a ticket or contact the aftersales service for assistance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileMD5() Obtain This field is used to return the MD5 checksum of the detected object for easier verification of the file integrity.
 * @method void setFileMD5(string $FileMD5) Set This field is used to return the MD5 checksum of the detected object for easier verification of the file integrity.
 * @method array getRecognitionResults() Obtain Image recognition result, including the hit tags, confidence and location.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRecognitionResults(array $RecognitionResults) Set Image recognition result, including the hit tags, confidence and location.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ImageModerationResponse extends AbstractModel
{
    /**
     * @var string This field is used to return the operation suggestion for the `Label` tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
     */
    public $Suggestion;

    /**
     * @var string This field is used to return the **maliciousness tag with the highest priority** in the detection result (LabelResults), which represents the moderation result suggested by the model. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
     */
    public $Label;

    /**
     * @var string This field is used to return the subtag name under the maliciousness tag with the highest priority hit by the detection result, such as *Porn-SexBehavior*. If no subtag is hit, an empty string will be returned.
     */
    public $SubLabel;

    /**
     * @var integer Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
     */
    public $Score;

    /**
     * @var array This field is used to return the detailed recognition result for the maliciousness tag hit by the categorization model, such as porn, advertising, or any other offensive, unsafe, or inappropriate type of content.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LabelResults;

    /**
     * @var array This field is used to return the detailed detection result of the object detection model, including the tag name hit by the content such as object, advertising logo, or QR code, tag score, coordinate information, scenario recognition result, and operation suggestion. For more information on the returned value, see the description of the `ObjectResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectResults;

    /**
     * @var array This field is used to return the detailed text OCR result, including the text coordinate information, text recognition result, and operation suggestion. For more information on the returned value, see the description of the `OcrResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OcrResults;

    /**
     * @var array This field is used to return the result of recognition based on image risk libraries (blocklist and allowlist). For more information on the returned value, see the description of the `LibResults` data structure.<br>Note: currently, **you cannot customize image risk libraries**.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LibResults;

    /**
     * @var string This field is used to return the `DataId` in the request parameters that correspond to the detected object.
     */
    public $DataId;

    /**
     * @var string This field is used to return the `BizType` in the request parameters that correspond to the detected object.
     */
    public $BizType;

    /**
     * @var string This field is used to return the additional information (Extra) configured based on your needs. If it is not configured, an empty value will be returned by default.<br>Note: the returned information varies by customer or `Biztype`. If you need to configure this field, submit a ticket or contact the aftersales service for assistance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Extra;

    /**
     * @var string This field is used to return the MD5 checksum of the detected object for easier verification of the file integrity.
     */
    public $FileMD5;

    /**
     * @var array Image recognition result, including the hit tags, confidence and location.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RecognitionResults;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Suggestion This field is used to return the operation suggestion for the `Label` tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
     * @param string $Label This field is used to return the **maliciousness tag with the highest priority** in the detection result (LabelResults), which represents the moderation result suggested by the model. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
     * @param string $SubLabel This field is used to return the subtag name under the maliciousness tag with the highest priority hit by the detection result, such as *Porn-SexBehavior*. If no subtag is hit, an empty string will be returned.
     * @param integer $Score Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
     * @param array $LabelResults This field is used to return the detailed recognition result for the maliciousness tag hit by the categorization model, such as porn, advertising, or any other offensive, unsafe, or inappropriate type of content.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ObjectResults This field is used to return the detailed detection result of the object detection model, including the tag name hit by the content such as object, advertising logo, or QR code, tag score, coordinate information, scenario recognition result, and operation suggestion. For more information on the returned value, see the description of the `ObjectResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $OcrResults This field is used to return the detailed text OCR result, including the text coordinate information, text recognition result, and operation suggestion. For more information on the returned value, see the description of the `OcrResults` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $LibResults This field is used to return the result of recognition based on image risk libraries (blocklist and allowlist). For more information on the returned value, see the description of the `LibResults` data structure.<br>Note: currently, **you cannot customize image risk libraries**.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataId This field is used to return the `DataId` in the request parameters that correspond to the detected object.
     * @param string $BizType This field is used to return the `BizType` in the request parameters that correspond to the detected object.
     * @param string $Extra This field is used to return the additional information (Extra) configured based on your needs. If it is not configured, an empty value will be returned by default.<br>Note: the returned information varies by customer or `Biztype`. If you need to configure this field, submit a ticket or contact the aftersales service for assistance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileMD5 This field is used to return the MD5 checksum of the detected object for easier verification of the file integrity.
     * @param array $RecognitionResults Image recognition result, including the hit tags, confidence and location.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("LabelResults",$param) and $param["LabelResults"] !== null) {
            $this->LabelResults = [];
            foreach ($param["LabelResults"] as $key => $value){
                $obj = new LabelResult();
                $obj->deserialize($value);
                array_push($this->LabelResults, $obj);
            }
        }

        if (array_key_exists("ObjectResults",$param) and $param["ObjectResults"] !== null) {
            $this->ObjectResults = [];
            foreach ($param["ObjectResults"] as $key => $value){
                $obj = new ObjectResult();
                $obj->deserialize($value);
                array_push($this->ObjectResults, $obj);
            }
        }

        if (array_key_exists("OcrResults",$param) and $param["OcrResults"] !== null) {
            $this->OcrResults = [];
            foreach ($param["OcrResults"] as $key => $value){
                $obj = new OcrResult();
                $obj->deserialize($value);
                array_push($this->OcrResults, $obj);
            }
        }

        if (array_key_exists("LibResults",$param) and $param["LibResults"] !== null) {
            $this->LibResults = [];
            foreach ($param["LibResults"] as $key => $value){
                $obj = new LibResult();
                $obj->deserialize($value);
                array_push($this->LibResults, $obj);
            }
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("RecognitionResults",$param) and $param["RecognitionResults"] !== null) {
            $this->RecognitionResults = [];
            foreach ($param["RecognitionResults"] as $key => $value){
                $obj = new RecognitionResult();
                $obj->deserialize($value);
                array_push($this->RecognitionResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
