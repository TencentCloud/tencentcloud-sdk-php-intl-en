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
 * Hit result of the categorization model
 *
 * @method string getScene() Obtain This field is used to return the scenario result recognized by the model, such as advertising, pornographic, and harmful.
 * @method void setScene(string $Scene) Set This field is used to return the scenario result recognized by the model, such as advertising, pornographic, and harmful.
 * @method string getSuggestion() Obtain This field is used to return the operation suggestion for the current maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
 * @method void setSuggestion(string $Suggestion) Set This field is used to return the operation suggestion for the current maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
 * @method string getLabel() Obtain This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
 * @method void setLabel(string $Label) Set This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
 * @method string getSubLabel() Obtain This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
 * @method void setSubLabel(string $SubLabel) Set This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
 * @method integer getScore() Obtain Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
 * @method void setScore(integer $Score) Set Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
 * @method array getDetails() Obtain This field is used to return the details of the subtag hit by the categorization model, such as number, hit tag name, and score.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDetails(array $Details) Set This field is used to return the details of the subtag hit by the categorization model, such as number, hit tag name, and score.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class LabelResult extends AbstractModel
{
    /**
     * @var string This field is used to return the scenario result recognized by the model, such as advertising, pornographic, and harmful.
     */
    public $Scene;

    /**
     * @var string This field is used to return the operation suggestion for the current maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
     */
    public $Suggestion;

    /**
     * @var string This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
     */
    public $Label;

    /**
     * @var string This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
     */
    public $SubLabel;

    /**
     * @var integer Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
     */
    public $Score;

    /**
     * @var array This field is used to return the details of the subtag hit by the categorization model, such as number, hit tag name, and score.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Details;

    /**
     * @param string $Scene This field is used to return the scenario result recognized by the model, such as advertising, pornographic, and harmful.
     * @param string $Suggestion This field is used to return the operation suggestion for the current maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
     * @param string $Label This field is used to return the maliciousness tag in the detection result.<br>Returned values: **Normal**: normal; **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
     * @param string $SubLabel This field is used to return the detection result for a subtag under the maliciousness tag, such as *Porn-SexBehavior*.
     * @param integer $Score Confidence score of the under the current label. Value range: 0 (**the lowest confidence**) to 100 (**the highest confidence**). For example, *Porn 99* indicates that the image is highly likely to be pornographic, while *Porn 0* indicates that the image is not pornographic.
     * @param array $Details This field is used to return the details of the subtag hit by the categorization model, such as number, hit tag name, and score.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
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

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new LabelDetailItem();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
