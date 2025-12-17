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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent description information.
 *
 * @method string getDescription() Obtain Intelligent description.
 * @method void setDescription(string $Description) Set Intelligent description.
 * @method float getConfidence() Obtain Confidence of the intelligent description, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Confidence of the intelligent description, with a value range from 0 to 100.
 * @method string getTitle() Obtain Intelligent description title.
 * @method void setTitle(string $Title) Set Intelligent description title.
 * @method array getKeywords() Obtain Intelligent description keywords.
 * @method void setKeywords(array $Keywords) Set Intelligent description keywords.
 * @method array getParagraphs() Obtain Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParagraphs(array $Paragraphs) Set Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMindMapUrl() Obtain Address of the mind map of a summary task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMindMapUrl(string $MindMapUrl) Set Address of the mind map of a summary task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMindMapPath() Obtain Path of the mind map of a summary task.
 * @method void setMindMapPath(string $MindMapPath) Set Path of the mind map of a summary task.
 * @method string getSubtitlePath() Obtain Subtitle file path of the video.
 * @method void setSubtitlePath(string $SubtitlePath) Set Subtitle file path of the video.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the summary file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the summary file.
 */
class MediaAiAnalysisDescriptionItem extends AbstractModel
{
    /**
     * @var string Intelligent description.
     */
    public $Description;

    /**
     * @var float Confidence of the intelligent description, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Intelligent description title.
     */
    public $Title;

    /**
     * @var array Intelligent description keywords.
     */
    public $Keywords;

    /**
     * @var array Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paragraphs;

    /**
     * @var string Address of the mind map of a summary task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MindMapUrl;

    /**
     * @var string Path of the mind map of a summary task.
     */
    public $MindMapPath;

    /**
     * @var string Subtitle file path of the video.
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage Storage location of the summary file.
     */
    public $OutputStorage;

    /**
     * @param string $Description Intelligent description.
     * @param float $Confidence Confidence of the intelligent description, with a value range from 0 to 100.
     * @param string $Title Intelligent description title.
     * @param array $Keywords Intelligent description keywords.
     * @param array $Paragraphs Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MindMapUrl Address of the mind map of a summary task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MindMapPath Path of the mind map of a summary task.
     * @param string $SubtitlePath Subtitle file path of the video.
     * @param TaskOutputStorage $OutputStorage Storage location of the summary file.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new AiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }

        if (array_key_exists("MindMapUrl",$param) and $param["MindMapUrl"] !== null) {
            $this->MindMapUrl = $param["MindMapUrl"];
        }

        if (array_key_exists("MindMapPath",$param) and $param["MindMapPath"] !== null) {
            $this->MindMapPath = $param["MindMapPath"];
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
